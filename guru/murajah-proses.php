<?php 
include'../koneksi.php';
$kode_murajah=$_POST['kode_murajah'];
$tanggal=$_POST['tanggal'];
$hari=$_POST['hari'];
$nis=$_POST['nis'];
$halaman=$_POST['halaman'];
$jumlah=$_POST['jumlah'];
$nilai=$_POST['nilai'];

mysqli_query($conn,"INSERT INTO tbl_murajah(kode_murajah,tanggal,hari,nis,halaman,jumlah,nilai) VALUES ('$kode_murajah','$tanggal','$hari','$nis','$halaman','$jumlah','$nilai')");
header("location:murajah-tambah.php?msg=added")
?>