<?php
session_start();

require_once "../koneksi.php";

$kode_nilai = $_GET['kode_nilai'];

mysqli_query($conn, "DELETE FROM tbl_nilai WHERE kode_nilai= '$kode_nilai'");


echo "<script>
		alert('Data Nilai berhasil di hapus..');
		document.location='nilai.php';
	  </script>";
	  return;
header("location:nilai.php");

?>