<?php 
session_start();
require_once "../koneksi.php";

if (isset($_POST['simpan'])) {
	$nis = $_POST['nis'];
	$nama = htmlspecialchars($_POST['nama']);
	$kelas = $_POST['kelas'];
	$alamat = htmlspecialchars($_POST['alamat']);

	$foto=$_FILES['image']['name'];
$source=$_FILES['image']['tmp_name'];
$folder='../assets/images/';

move_uploaded_file($source, $folder.$foto);
	mysqli_query($conn, "INSERT INTO tbl_siswa VALUES('$nis','$nama','$alamat','$kelas','$foto')");

	echo "<script>
			alert('Data Siswa behasil disimpan');
			document.location.href= 'siswa-tambah.php';
		  </script>";
		  return;

} 
?>