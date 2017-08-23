<html>
<head>
<title>&Ccedil;i&ccedil;ek Bah&ccedil;esine Ho&#351; Geldiniz...</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="ayar.css" />
</head>

<body><div class="style3">
<?php
session_start();
ob_start();
session_destroy();
echo "Çıkış Yaptınız. Ana Sayfaya Yönlendiriliyorsunuz";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>

</div>


</body>
</html>