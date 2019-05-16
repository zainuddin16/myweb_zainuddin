<!DOCTYPE html>
<html>
<head>
	<title>CRUD GitHub</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="read.php">Beranda</a> / <a href="insert.php">Tambah Data</a></p>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="tambah_proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>