<?php
session_start();

require_once "../koneksi.php";

$id = $_GET['nip'];
$foto = $_GET['foto'];

mysqli_query($conn, "DELETE FROM tbl_guru WHERE nip= '$id'");
if ($foto != 'user.jpg') {
	unlink('../assets/images/' .$foto);
}

echo "<script>
		alert('Data guru berhasil di hapus..');
		document.location='guru.php';
	  </script>";
	  return;
header("location:guru.php");

?>