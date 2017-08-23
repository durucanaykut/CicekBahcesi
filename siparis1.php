<?php
		$adet=$_POST['adet'];
		$adi=$_POST['adi'];
		$soyadi=$_POST['soyadi'];
		$kart1=$_POST['kart1'];
		$kart2=$_POST['kart2'];
		$kart3=$_POST['kart3'];
		$kart4=$_POST['kart4'];
		$kod=$_POST['kod'];
		$guven=$_POST['guven'];
		$urun=$_POST['urun'];

		$kart = $kart1.$kart2.$kart3.$kart4;


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $urun . " Sipari&#351;i "; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="ayar.css" />
</head>

<body>

<?php

session_start();
$username = $_SESSION['username'];

?>
<table align="right"><tr>
<td> 
 <div id="menum">
  <ul>
    <li><form action="hesabim.php" method="post"><input type="submit"class="renklibuton" id="renklibuton" value="Hesabım" >
      <ul>
        <li><form action="hesabim.php" method="post"><input type="submit"class="renklibuton" id="renklibuton" value="<?php echo $username; ?>" ></form></li>
        <li><form action="bilgi.php" method="post"><input type="submit"class="renklibuton" id="renklibuton" value="Üyelik Bilgilerim" ></form></li>
        <li><form action="urun.php" method="post"><input type="submit"class="renklibuton" id="renklibuton" value="Siparişlerim" ></form></li>
        <li><form action="adres.php" method="post"><input type="submit"class="renklibuton" id="renklibuton" value="Adres Defterim" ></form></li>
		<li><form action="logout.php" method="post"><input type="submit"class="renklibuton" id="renklibuton" value="Çıkış" ></form></td></li>
      </ul>
    </li>
   </ul>
</div>

</tr>
</table>

<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="hesabim.php"><img src="photo/banner.jpg" width="750" height="200" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="250" height="30"><div align="center" class="link2"><a href="hesabim.php"><img src="img/anasayfa.jpg" width="250" height="30" border="0"></a></div></td>
        <td width="250" height="30"><div align="center"><a href="cicek1.php"><img src="img/cicekler.jpg" width="250" height="30" border="0"></a></div></td>
        <td width="250" height="30"><div align="center"><a href="iletisim1.php"><img src="img/iletisim.jpg" width="250" height="30" border="0"></a></div></td>
      </tr>
      <tr valign="top">
        <td height="500" colspan="3">
		
		<?php 
		
		if($kod==$guven)
		{
		
			echo "<h1 align='center'> Sipari&#351; Ba&#351;ar&#305;l&#305;</h1><br><br><br>";
			
			echo "<table width='500' border='5' align='center' cellspacing='0' cellpadding='0'>
            <tr>
              <td><table width='100%'  border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td height='35'>&nbsp;&nbsp;Ad Soyad </td>
                  <td width='25'>=</td>
                </tr>
              </table></td>
              <td width='300'>&nbsp;&nbsp;" . $adi . " &nbsp; " . $soyadi . "</td>
            </tr>
			<tr>
              <td><table width='100%'  border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td height='35'>&nbsp;&nbsp;Urun Adi</td>
                  <td width='25'>=</td>
                </tr>
              </table></td>
              <td>&nbsp;&nbsp;" . $urun . "</td>
            </tr>
            <tr>
              <td><table width='100%'  border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td height='35'>&nbsp;&nbsp;Adet</td>
                  <td width='25'>=</td>
                </tr>
              </table></td>
              <td>&nbsp;&nbsp;" . $adet . "</td>
            </tr>
            <tr>
              <td><table width='100%'  border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td height='35'>&nbsp;&nbsp;Kart No </td>
                  <td width='25'>=</td>
                </tr>
              </table></td>
              <td>&nbsp;&nbsp;" . md5($kart). "</td>
            </tr>
          </table>";
		
		}
		
		
		else
		{
		
			echo "<h1 align='center'>G&uuml;venlik Kodu Hatal&#305 <br> Sipari&#351 &#304;ptal Edildi <br> Geri Y&ouml;nlendiriliyorsunuz....</h1><br><br><br>";
			header("refresh:3, url=hesabim.php");
		
		}
		
		
		?>
		  
		  
		  </td>
			</tr>
        </table>		
		</td>
      </tr>
    </table></td>
  </tr>
 
</table>
</body>
</html>
