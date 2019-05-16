<!DOCTYPE html>
<html>
<head>
	<title>CRUD GitHub</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="read.php">Beranda</a> / <a href="insert.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM siswa WHERE id='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	
	<form action="edit_proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $data['nim']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat"><?php echo $data['alamat'] ?></textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>