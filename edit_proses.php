<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id			= $_POST['id'];
	$nim		= $_POST['nim'];
	$nama		= $_POST['nama'];
	$alamat		= $_POST['alamat'];
	$update = mysql_query("UPDATE siswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE id='$id'") or die(mysql_error());
	
	if($update){
		echo 'Data berhasil di simpan! ';
		echo '<a href="read.php?id='.$id.'">Kembali</a>';
	}else{
		echo 'Gagal menyimpan data! ';
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>