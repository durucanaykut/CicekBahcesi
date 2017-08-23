<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Yeni Bahar</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="ayar.css" />
</head>

<body>
<?php
include("ayar.php");
session_start();
$username = $_SESSION['username'];


$sql=mysql_query("SELECT * FROM users Where id=2");
while ($kayit=mysql_fetch_array($sql)) {
$isim=$kayit['isim']; 
$soyisim = $kayit['soyisim'];
$username = $kayit['username'];
$password = $kayit['password'];
$email = $kayit['email'];
$adres = $kayit['adres'];
echo $isim;
echo $username;
}
?>

</body>
</html>