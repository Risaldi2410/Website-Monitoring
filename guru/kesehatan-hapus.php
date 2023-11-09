<?php
session_start();

require_once "../koneksi.php";

$kode_kesehatan = $_GET['kode_kesehatan'];

mysqli_query($conn, "DELETE FROM tbl_kesehatan WHERE kode_kesehatan= '$kode_kesehatan'");


echo "<script>
		alert('Data Kesehatan Santri berhasil di hapus..');
		document.location='kesehatan.php';
	  </script>";
	  return;
header("location:kesehatan.php");

?>