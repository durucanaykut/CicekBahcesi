<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>&Ccedil;an &Ccedil;i&ccedil;e&#287;i</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="ayar.css" />
</head>

<body>

<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="index.php"><img src="photo/banner.jpg" width="750" height="200" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="250" height="30"><div align="center" class="link2"><a href="index.php"><img src="img/anasayfa.jpg" width="250" height="30" border="0"></a></div></td>
        <td width="250" height="30"><div align="center"><a href="cicek.php"><img src="img/cicekler.jpg" width="250" height="30" border="0"></a></div></td>
        <td width="250" height="30"><div align="center"><a href="iletisim.php"><img src="img/iletisim.jpg" width="250" height="30" border="0"></a></div></td>
      </tr>
      <tr>
        <td colspan="3"><table width="750" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="250"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
				<table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#FF00FF">
                  <tr>
                    <td height="75"><h1 align="center">&Ccedil;an &Ccedil;i&ccedil;e&#287;i</h1></td>
                  </tr>
                </table>
				</td>
              </tr>
              <tr>
                <td>
				<table width="100%"  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="175"><div align="center"><img src="photo/cancicegi.jpg" width="145" height="150"></div></td>
                  </tr>
                </table>
				</td>
              </tr>
              <tr>
                <td>
				<table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#FF00FF">
              <tr>
                <td height="50"><div align="center">
                  <h2>Anlam&#305;</h2>
                </div></td>
              </tr>
              <tr>
                <td height="300">
				<marquee direction="down">
				<ul>
				<br>
                  <li>A&#351;k&#305;m&#305;za Sadakatle<br>
                    Ba&#287;l&#305;y&#305;m 
                    <br>
                  </li><br>
                  <br>
				  <br>
				  <br>
                    <br>
					<br>
					<br>
					<br>
					<br>
				</ul>   
				  </marquee>				   </td>
              </tr>
            </table>
				</td>
              </tr>
            </table>
			
			</td>
            <td valign="top"><div align="center">
			  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="150">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" valign="top">
				  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              
              <tr>
                <td valign="top"><form name="form1" method="post" action="siparis.php">
				<table width="463" height="204" border="2" align="center" bordercolor="#000033">
				<tr>
				<td height="40" colspan="2" valign="middle"><h2 align="center">Sipari&#351;</h2></td>
				</tr>
    <tr>
      <td width="117">&Ccedil;i&ccedil;ek Adeti</td>
      <td width="214"><label>
        <input type="text" name="adet" id="adet" />
      </label></td>
    </tr>
    <tr>
      <td>Al&#305;c&#305;n&#305;n Ad&#305; </td>
      <td><label>
        <input type="text" name="adi" id="adi" />
      </label></td>
    </tr>
    <tr>
      <td>Al&#305;c&#305;n&#305;n Soyad&#305; </td>
      <td><label>
        <input type="text" name="soyadi" id="soyadi" />
      </label></td>
    </tr>
	<tr>
	<td>Kart No</td>
	<td><input name="kart1" type="password" size="4" maxlength="4">
	  -
	  <input name="kart2" type="password" size="4" maxlength="4">
	  -
	  <input name="kart3" type="password" size="4" maxlength="4">
	  -
	  <input name="kart4" type="password" size="4" maxlength="4"></td>
	</tr>
    <tr>
      <td rowspan="2">Guvenlik Kodu</td>
      <td><?php
$a=rand(10000,99999);
echo "<img src='img/".substr($a,0,1).".gif'>";
echo "<img src='img/".substr($a,1,1).".gif'>";
echo "<img src='img/".substr($a,2,1).".gif'>";
echo "<img src='img/".substr($a,3,1).".gif'>";
echo "<img src='img/".substr($a,4,1).".gif'>";
?>&nbsp;</td>
    </tr>
    <tr>
      <td><label>
        <input type="text" name="guven" id="guven" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><label>
        <input type="submit" id="renklibuton" class="renklibuton" name="button" value="Siparis Et" />
      </label></td>
    </tr>
  </table>
                <p>
                  <input type="hidden" name="kod" value="<?php echo $a;?>">
				  <input type="hidden" name="urun" value="Çan Çiçegi">
                </p>
                </form></td>
              </tr>
            </table>
				  </td>
                </tr>
              </table>
			</div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
