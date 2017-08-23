<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>&Ccedil;i&ccedil;ek Bah&ccedil;esine Ho&#351; Geldiniz...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="ayar.css" />
</head>

<body><div class="style3">
<?php
include("ayar.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
function go ($url, $time = 2){
	if ($time) header("Refresh: {$time}; url={$url}");
	else header("Location: {$url}");
}

if($username && $password){
	$sorgula = mysql_query("select * from users where username='$username' and password='$password'");
	$verisay = mysql_num_rows($sorgula);
	if($verisay!=0){
	$_SESSION["username"] = $username;

	
	echo "Basarili bir giris yapildi. Sayfaya yönlendiriliyorsunuz... <br/> ";
	go("hesabim.php",2);
	}else{
		echo "kullanici bulunamadi <a href= 'giris1.php'> anasayfa </a>";
	}
}else{
	echo "yanlis bilgi girdiniz";
	include ("giris1.php");
}
?>
</div>


</body>
</html>