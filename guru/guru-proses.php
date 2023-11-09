<?php 
session_start();

require_once "../koneksi.php";

if (isset($_POST['simpan'])) {
	$nip     = htmlspecialchars($_POST['nip']);
	$nama    = htmlspecialchars($_POST['nama']);
	$telepon = htmlspecialchars($_POST['telepon']);
	$agama   = $_POST['agama'];
	$alamat  = htmlspecialchars($_POST['alamat']);
	$foto    = htmlspecialchars($_FILES['image']['name']);

	$cekNip  = mysqli_query($conn, "SELECT nip FROM tbl_guru WHERE nip = '$nip'");
	if (mysqli_num_rows($cekNip) > 0) {
		header('location:guru-tambah.php?msg=cancel');
	}

	$foto=$_FILES['image']['name'];
$source=$_FILES['image']['tmp_name'];
$folder='../assets/images/';

move_uploaded_file($source, $folder.$foto);

	mysqli_query($conn, "INSERT INTO tbl_guru VALUES ('$nip','$nama','$alamat','$telepon','$agama','$foto')");

	header("location:guru-tambah.php?msg=added");
	return;

}


?>