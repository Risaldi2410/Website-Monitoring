<?php
session_start();

require_once "../koneksi.php";

$id = $_GET['nis'];
$foto = $_GET['foto'];

mysqli_query($conn, "DELETE FROM tbl_siswa WHERE nis= '$id'");
if ($foto != 'user.jpg') {
	unlink('../assets/images/' .$foto);
}

echo "<script>
		alert('Data siswa berhasil di hapus..');
		document.location='siswa.php';
	  </script>";
	  return;
header("location:siswa.php");

?>