<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="hasilkirim.php"> <!--membuat form dari method POST dengan memanggil hasilkirim.php-->
		<!--membuat tabel dengan baris dan kolom-->
		<table>
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td> <!--membuat inputan dengan teks "Nama"-->
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnlogin" value="Kirim"> <!--membuat inputan dengan teks "Login"-->
					<input type="reset" name="reset" value="Reset"> <!--membuat inputan dengan teks "Reset"-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>