<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php //menggunakan perintah php
	setcookie("variable_cookies", "ini adalah variable cookies", time()+60); //menerapkan fungsi cookies dengan lama waktu 60 detik
	echo "<a href=cekcookies.php> Cek Cookies </a>"; //menampilkan link cekcookies.php dengan teks Cek Cookies
	?>
</body>
</html>