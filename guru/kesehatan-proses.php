<?php 
include'../koneksi.php';
$kode_kesehatan=$_POST['kode_kesehatan'];
$tanggal=$_POST['tanggal'];
$nis=$_POST['nis'];
$diagnosa=$_POST['diagnosa'];
$pengobatan=$_POST['pengobatan'];

mysqli_query($conn,"INSERT INTO tbl_kesehatan(kode_kesehatan,tanggal,nis,diagnosa,pengobatan) VALUES ('$kode_kesehatan','$tanggal','$nis','$diagnosa','$pengobatan')");
header("location:kesehatan-tambah.php?msg=added")
?>