<?php //menggunakan perintah php
if (empty($_POST['nama']) || (empty($_POST['email']))) { //jika nilai dari method POST input nama kosong maka browser akan meredirect kehalaman redirect.php 
		header("location:redirect.php");
} else { //jika tidak akan menampilkan "Nama" dan "Email" beserta tanggal dan waktu
echo " Nama : ".$_POST['nama']."<br>";
echo " Email : ".$_POST['email']."<br>";
date_default_timezone_set('Asia/Jakarta'); 
echo date('H:i:s a, l-d-m-Y');
}
?>