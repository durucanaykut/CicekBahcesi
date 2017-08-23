<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>&Ccedil;i&ccedil;ek Bah&ccedil;esine &Uuml;ye Ol</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="ayar.css" />
</head>

<body><div class="style3">
<?php
include("ayar.php");
$username = $_POST['username'];
$password = $_POST['password'];
$isim = $_POST['isim'];
$soyisim = $_POST['soyisim'];
$email = $_POST['email'];
$adres = $_POST['adres'];

if($_POST){
	
	$sorgula = mysql_query("insert into users(isim, soyisim, username, email, password,adres) values('$isim','$soyisim','$username','$email','$password','$adres')");
	if($sorgula){
		echo "kayit basarili";
		header("Refresh: 2; url=giris1.php");
	}else{
		echo "kayit esnasında hata olustu.";
		header("Refresh: 2; url=kayit1.php");		
	}
	
}else{
	echo "eksik bilgi girdiniz";
	include ("kayit1.php");
}
?>
</div>


</body>
</html>