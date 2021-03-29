<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="isibiodata.php"> <!--membuat form dari method POST dengan memanggil isibiodata.php dengan beberapa inputan-->
		<h2> Masukan Biodata Anda: </h2>
		<!--membuat tabel dengan baris dan kolom-->
		<table width="600"  cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama </td>
				<td><input type="text" name="nama"></td> <!--membuat inputan dengan teks "Nama"-->
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td> <!--membuat inputan dengan teks "Email"-->
			</tr>
			<tr>
				<td width="130">Tempat dan Tanggal Lahir</td>
				<td><input type="text" name="ttl"></td> <!--membuat inputan dengan teks "Tempat dan Tanggal Lahir"-->
			</tr>
			<tr>
				<td width="130">Pendidikan</td>
				<td><input type="text" name="pendidikan"></td> <!--membuat inputan dengan teks "Pendidikan"-->
			</tr>
			<tr>
				<td width="130">Alamat</td>
				<td><input type="text" name="alamat"></td> <!--membuat inputan dengan teks "Alamat"-->
			</tr>
			<tr>
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td> <!--membuat inputan dengan teks "Hobi"-->
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Kirim"> <!--membuat inputan dengan teks "Kirim"-->
					<input type="reset" name="reset" value="Reset"> <!--membuat inputan dengan teks "Reset"-->
				</td>
			</tr>
		</table>
	</form>

</body>
</html>