<?php
session_start();

require_once "../koneksi.php";

$kode_kasus = $_GET['kode_kasus'];

mysqli_query($conn, "DELETE FROM tbl_kasus WHERE kode_kasus= '$kode_kasus'");


echo "<script>
		alert('Data Kasus Santri berhasil di hapus..');
		document.location='kasus.php';
	  </script>";
	  return;
header("location:kasus.php");

?>