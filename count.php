<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>
	<?php //menggunakan perintah php
	//pembuatan array dengan variabel
	$nama[]="Agung Teguh";
	$nama[]="Wibowo ";
	$nama[]="Almais ";
	echo $nama[1].$nama[2].$nama[0];
	echo "<br>";
	//menghitung jumlah elemen array
	$jum_array=count($nama);
	echo "Jumlah elemen array = ".$jum_array; //menampilkan jumlah elemen array
	?>
</body>
</html>