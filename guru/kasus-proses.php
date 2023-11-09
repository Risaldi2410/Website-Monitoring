<?php 
include'../koneksi.php';
$kode_kasus=$_POST['kode_kasus'];
$tanggal=$_POST['tanggal'];
$kasus=$_POST['kasus'];
$nis=$_POST['nis'];
$saran=$_POST['saran'];

mysqli_query($conn,"INSERT INTO tbl_kasus(kode_kasus,tanggal,kasus,nis,saran) VALUES ('$kode_kasus','$tanggal','$kasus','$nis','$saran')");
header("location:kasus-tambah.php?msg=added")
?>