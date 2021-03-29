<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="getAct.php"> <!--membuat form dari method GET dengan memanggil getAct.php-->
		<!--membuat tabel dengan baris dan kolom-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama </td>
				<td><input type="text" name="nama"></td> <!--membuat inputan dengan teks "Nama"-->
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td> <!--membuat inputan dengan teks "Email"-->
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login"> <!--membuat inputan dengan teks "Login"-->
					<input type="reset" name="reset" value="Reset"> <!--membuat inputan dengan teks "Reset"-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>