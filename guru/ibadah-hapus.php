<?php
session_start();

require_once "../koneksi.php";

$kode_ibadah = $_GET['kode_ibadah'];

mysqli_query($conn, "DELETE FROM tbl_ibadah WHERE kode_ibadah= '$kode_ibadah'");


echo "<script>
		alert('Data Ibadah Santri berhasil di hapus..');
		document.location='ibadah.php';
	  </script>";
	  return;
header("location:ibadah.php");

?>