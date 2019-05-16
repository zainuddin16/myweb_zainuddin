<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	$nim		= $_POST['nim'];
	$nama		= $_POST['nama'];	
	$alamat		= $_POST['alamat'];	

	$input = mysql_query("INSERT INTO siswa VALUES(NULL, '$nim', '$nama', '$alamat')") or die(mysql_error());
	if($input){
		echo 'Data berhasil di tambahkan! ';
		echo '<a href="read.php">Kembali</a>';
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="insert.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>