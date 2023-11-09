<?php

session_start();
require_once "../koneksi.php";

//jika tombol simpan ditekan
if (isset($_POST['simpan'])) {
	//ambil value yang di posting
	$id     = $_POST['id'];
	$nama   = trim(htmlspecialchars($_POST['nama']));
	$email  = trim(htmlspecialchars($_POST['email']));
	$status = $_POST['status'];
	$akreditasi = $_POST['akreditasi'];
	$alamat = trim(htmlspecialchars($_POST['alamat']));
	$visimisi = trim(htmlspecialchars($_POST['visimisi']));
	$gambar    = htmlspecialchars($_FILES['image']['name']);

	$foto=$_FILES['image']['name'];
$source=$_FILES['image']['tmp_name'];
$folder='../assets/images/';

move_uploaded_file($source, $folder.$foto);
	mysqli_query($conn, "UPDATE tbl_sekolah SET nama = '$nama', email = '$email', status ='$status', akreditasi = '$akreditasi', alamat ='$alamat', visimisi ='$visimisi', gambar = '$gambar' where id = id");
	header("location:profile-sekolah.php?msg=update");
	
}
?>