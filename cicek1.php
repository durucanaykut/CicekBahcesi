<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>&Ccedil;i&ccedil;eklerimiz</title>
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

<table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="750" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="hesabim.php"><img src="photo/banner.jpg" width="755" height="200" border="0"></a></td>
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
            <td><table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="150" height="180"><div align="center">
                  <table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                      <tr>
                        <td height="150"><a href="mavigul1.php"><img src="photo/mavigul.jpg" width="145" height="150" border="0"></a></td>
                      </tr>
                      <tr>
                        <td height="30"><div align="center"><a href="mavigul1.php">Mavi G&uuml;l </a></div></td>
                      </tr>
                          </table>
                </div></td>
                <td width="150" height="180"><div align="center">
                  <table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                      <tr>
                        <td height="150"><a href="kirmizigul1.php"><img src="photo/kirmizigul.jpg" width="145" height="150" border="0"></a></td>
                      </tr>
                      <tr>
                        <td height="30"><div align="center"><a href="kirmizigul1.php">K&#305;rm&#305;z&#305; G&uuml;l</a> </div></td>
                      </tr>
                  </table>
                </div></td>
                <td width="150" height="180"><div align="center">
                  <table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                      <tr>
                        <td height="150"><a href="beyazgul1.php"><img src="photo/beyazgul.jpg" width="145" height="150" border="0"></a></td>
                      </tr>
                      <tr>
                        <td height="30"><div align="center"><a href="beyazgul1.php">Beyaz G&uuml;l </a></div></td>
                      </tr>
                  </table>
                </div></td>
                <td width="150" height="180"><div align="center">
                  <table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                      <tr>
                        <td height="150"><a href="lavantagul1.php"><img src="photo/lavantagul.jpg" width="145" height="150" border="0"></a></td>
                      </tr>
                      <tr>
                        <td height="30"><div align="center"><a href="lavantagul1.php">Lavanta Rengi G&uuml;l</a> </div></td>
                      </tr>
                  </table>
                </div></td>
                <td width="150" height="180"><div align="center">
                  <table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                      <tr>
                        <td height="150"><a href="alacalilale1.php"><img src="photo/alacalilale.jpg" width="145" height="150" border="0"></a></td>
                      </tr>
                      <tr>
                        <td height="30"><div align="center"><a href="alacalilale1.php">Alacal&#305; Lale</a> </div></td>
                      </tr>
                  </table>
                </div></td>
              </tr>
              <tr>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="kirmizilale1.php"><img src="photo/kirmizilale.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="kirmizilale1.php">K&#305;rm&#305;z&#305; Lale</a> </div></td>
                  </tr>
                </table></td>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="papatya1.php"><img src="photo/papatya.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="papatya1.php">Papatya</a></div></td>
                  </tr>
                </table></td>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="kaktus1.php"><img src="photo/kaktus.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="kaktus1.php">Kakt&uuml;s</a></div></td>
                  </tr>
                </table></td>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="sardunya1.php"><img src="photo/sardunya.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="sardunya1.php">Sardunya</a></div></td>
                  </tr>
                </table></td>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="acelya1.php"><img src="photo/acelya.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="acelya1.php">Acelya Hint</a></div></td>
                  </tr>
                </table></td>
              </tr>
			  <tr>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="adacayi1.php"><img src="photo/adacayi.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="adacayi1.php">Ada&ccedil;ay&#305;</a></div></td>
                  </tr>
                </table></td>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="ardic1.php"><img src="photo/ardic.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="ardic1.php">Ard&#305;&ccedil;</a></div></td>
                  </tr>
                </table></td>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="cancicegi1.php"><img src="photo/cancicegi.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="cancicegi1.php">&Ccedil;an &Ccedil;i&ccedil;e&#287;i</a></div></td>
                  </tr>
                </table></td>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="kardelen1.php"><img src="photo/kardelen.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="kardelen1.php">Kardelen</a></div></td>
                  </tr>
                </table></td>
                <td width="150" height="180"><table width="100%"  border="2" cellpadding="0" cellspacing="0" bordercolor="#000000">
                  <tr>
                    <td height="150"><a href="yenibahar1.php"><img src="photo/yenibahar.jpg" width="145" height="150" border="0"></a></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="center"><a href="yenibahar1.php">Yeni Bahar</a> </div></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
    <tr>
  <td><p>&nbsp;</p>
  </tr>
</table>
</body>
</html>
