
<?php

if(!@$connect = mysql_connect("localhost", "root", "")){
	die("Mysql'e bağlantı kurulamadı!".mysql_error());
}
if(!@mysql_select_db("cicekbahcesi",$connect)){
	die("Veritabanına bağlantı kurulamadı!".mysql_error());
}



?>