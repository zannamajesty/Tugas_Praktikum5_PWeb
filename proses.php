<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php //menggunakan perintah php
	include "inc.php"; //mengeksekusi file inc.php
	echo $angka; //menampilkan nilai variabel angka
	echo "<br>"; //ganti baris
	//mengeksekusi nilai
	if ($angka==100) {
		echo "Memuaskan";
	}
	elseif ($angka<100&&$angka>=85) {
		echo "Sangat Baik"; 
	}
	elseif ($angka<85&&$angka>=70) {
		echo "Baik";
	}
	elseif ($angka<70&&$angka>=55) {
		echo "Cukup";
	}
	elseif ($angka<55&&$angka>=0) {
		echo "Kurang";
	}
	?>
</body>
</html>