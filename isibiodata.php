<?php 
echo "<h2>BIODATA</h2>"; //menampilkan teks BIODATA
//membuat heading 3 dan menampilkan teks dari method POST dengan mengambil nilai dari biodata.php
echo "<h3>Nama : ".$_POST['nama']."</h3>";
echo "<h3> Email : ".$_POST['email']."</h3>";
echo "<h3>Tempat dan Tanggal Lahir : ".$_POST['ttl']."</h3>"; 
echo "<h3>Pendidikan : ".$_POST['pendidikan']."</h3>";
echo "<h3> Alamat : ".$_POST['alamat']."</h3>";
echo "<h3> Hobi : ".$_POST['hobi']."</h3>";
?>