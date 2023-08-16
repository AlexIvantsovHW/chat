<?php 
header('Access-Control-Allow-Origin:*', "Refresh: 2");
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,PUT,DELETE');
header('Access-Control-Allow-Headers:Content-Type, X-Auth-Token, Origin,Authorization');

$cfg['Servers'][$i]['ssl'], 
$cfg['Servers'][$i]['ssl_key'],
$cfg['Servers'][$i]['ssl_cert'], 
$cfg['Servers'][$i]['ssl_ca'], 
$cfg['Servers'][$i]['ssl_ca_path'], 
$cfg['Servers'][$i]['ssl_ciphers'], 
$cfg['Servers'][$i]['ssl_verify']
    $server='bcqp479udwqz62nmdf0v-mysql.services.clever-cloud.com';
	$user='uzdexamochtagwss';
	$password='xyuBgDdtI8GvV6TnKjhx';
	$db='bcqp479udwqz62nmdf0v'; 

    if(isset($_POST["name"])){$name=$_POST['name'];}else{$name= "";}
    if(isset($_POST["text"])){$text=$_POST['text'];}else{$text= "";}
    if(isset($_POST["tag"])){$tag=$_POST['tag'];}else{$tag= "";} 
    if(isset($_POST["time"])){$time=$_POST['time'];}else{$time= "";} 

    $conn=new mysqli($server,$user,$password,$db);

    if(mysqli_connect_error()){echo mysqli_connect_error();exit();}
    else{$conn->query("INSERT INTO `chat`(`name`,`text`,`tag`,`time`) VALUES('$name','$text','$tag','$time')"); }  
    $conn->close();
?>