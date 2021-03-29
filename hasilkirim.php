<?php
if (empty($_POST['nama'])) { //jika method POST input nama kosong
	header("location:kosong.php"); //browser akan meredirect ke halaman kosong.php
} else {
	echo "<center>Nama : ".$_POST['nama']."</center><br>"; //jika tidak browser akan menampilkan "Nama"
}
?>