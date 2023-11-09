<?php
session_start();

require_once "../koneksi.php";

$kode_murajah = $_GET['kode_murajah'];

mysqli_query($conn, "DELETE FROM tbl_murajah WHERE kode_murajah= '$kode_murajah'");


echo "<script>
		alert('Data Murajah berhasil di hapus..');
		document.location='murajah.php';
	  </script>";
	  return;
header("location:murajah.php");

?>