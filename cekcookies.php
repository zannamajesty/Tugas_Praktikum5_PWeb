<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php //menggunakan perintah php
	//menampilkan hasil variabel cookies
	if (isset($variable_cookies)) {
		echo 'Variabel cookiesnya "$variable_cookies" nilainya adalah'.$variable_cookies;
	} else {
		echo "Variabel cookies belum diterapkan"; 
	}
	?>
</body>
</html>