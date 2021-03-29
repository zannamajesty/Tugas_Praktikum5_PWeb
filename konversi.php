<!DOCTYPE html>
<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
	<?php
	$a=300.4; //membuat variabel a
	echo $a; //menampilkan nilai variabel a
	echo "<br>";
	//menampilkan tipe data
	echo "Tipe Double : ", doubleval($a), "<br>";
	echo "Tipe Integer : ", intval($a), "<br>";
	echo "Tipe String : ", strval($a);
	?>
</body>
</html>