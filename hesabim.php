<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>&Ccedil;i&ccedil;ek Bah&ccedil;esine Ho&#351; Geldiniz...</title>
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
      <tr>
        <td colspan="3"><table width="750" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="250" valign="top"><table width="100%"  border="2" cellspacing="0" cellpadding="0" bordercolor="#FF00FF">
              <tr>
                <td height="75" align="center" valign="middle">
				<div align="center">
                  <h1>Duyurular</h1>
                </div></td>
              </tr>
              <tr>
                <td height="300">
				<marquee direction="down">
				<ul>
				<br>
                  <li>Sitemiz Yenilenmi&#351;tir.<br>
                  </li>
				  <br>
                  <li>En &Ccedil;ok Tercih Edilen &Ccedil;i&ccedil;ekler Hangileridir?<br>
                  </li>
				  <br>
                  <li>Hangi &Ccedil;i&ccedil;ek Kime Hediye Edilir?<br>
                  </li>
				  <br>
                  <li>&Ccedil;i&ccedil;ekler Hakk&#305;nda Bilmedikleriniz Burada!<br>
                    <br>
                    <br>
                    
                    </li>
                  </ul>   
				  </marquee>				   </td>
              </tr>
           
			</td>
		   </tr>
				</table>
		</td>
</tr>
		</table>
  
  
		</table>
	</td>
	</tr>
</table>

</body>
</html>