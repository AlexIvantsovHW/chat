<?php 
    header('Access-Control-Allow-Origin:*', "Refresh: 3");
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,PUT,DELETE');
    header('Access-Control-Allow-Headers:Content-Type, X-Auth-Token, Origin,Authorization');
    /* $server="localhost";
	$user="root";
	$password="";
	$db="id21139145_ichat"; */

    //------------------
    $server='bcqp479udwqz62nmdf0v-mysql.services.clever-cloud.com';
	$user='uzdexamochtagwss';
	$password='xyuBgDdtI8GvV6TnKjhx';
	$db='bcqp479udwqz62nmdf0v'; 
    //-------------------
    $method=$_SERVER['REQUEST_METHOD'];
    $conn=new mysqli($server,$user,$password,$db);
    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit();
    }else{
        $sql="select * from chat";             
        $result=mysqli_query($conn,$sql);
    }
    if(!$result){
        http_response_code(404);
        die(mysqli_error($conn));
    }
    if($method=='GET'){
        if(!$id) echo '[';
        for($i=0;$i<mysqli_num_rows($result);$i++){
            echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
            
        }
        if(!$id) echo ']';
    }elseif($method =='POST'){
        echo json_encode($result);
        
    }
        else{echo mysqli_affected_rows($conn);};
    
    $conn->close();
       ?>