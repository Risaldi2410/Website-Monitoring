<?php 
include'../koneksi.php';
$kode_nilai=$_POST['kode_nilai'];
$nis=$_POST['nis'];
$nilai=$_POST['nilai'];
$konversi=$_POST['konversi'];
$kesalahan=$_POST['kesalahan'];
$keterangan=$_POST['keterangan'];

mysqli_query($conn,"INSERT INTO tbl_nilai(kode_nilai,nis,nilai,konversi,kesalahan,keterangan) VALUES ('$kode_nilai','$nis','$nilai','$konversi','$kesalahan','$keterangan')");
header("location:nilai-tambah.php?msg=added")
?>