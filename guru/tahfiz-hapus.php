<?php
session_start();

require_once "../koneksi.php";

$kode_tahfiz = $_GET['kode_tahfiz'];

mysqli_query($conn, "DELETE FROM tbl_tahfiz WHERE kode_tahfiz= '$kode_tahfiz'");


echo "<script>
		alert('Data Thafiz berhasil di hapus..');
		document.location='tahfiz.php';
	  </script>";
	  return;
header("location:tahfiz.php");

?>