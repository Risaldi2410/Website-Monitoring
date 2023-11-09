<?php
session_start();

require_once "../koneksi.php";

$kode_tahsin = $_GET['kode_tahsin'];

mysqli_query($conn, "DELETE FROM tbl_tahsin WHERE kode_tahsin= '$kode_tahsin'");


echo "<script>
		alert('Data Tahsin berhasil di hapus..');
		document.location='tahsin.php';
	  </script>";
	  return;
header("location:tahsin.php");

?>