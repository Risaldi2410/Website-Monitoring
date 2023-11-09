<?php
session_start();

require_once "../koneksi.php";

$kode_pelajaran = $_GET['kode_pelajaran'];

mysqli_query($conn, "DELETE FROM tbl_pelajaran WHERE kode_pelajaran= '$kode_pelajaran'");


echo "<script>
		alert('Data Pelajaran berhasil di hapus..');
		document.location='pelajaran.php';
	  </script>";
	  return;
header("location:pelajaran.php");

?>