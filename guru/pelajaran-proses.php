<?php 
include'../koneksi.php';
$kode_pelajaran=$_POST['kode_pelajaran'];
$tanggal=$_POST['tanggal'];
$hari=$_POST['hari'];
$nis=$_POST['nis'];
$pelajaran=$_POST['pelajaran'];
$nilai=$_POST['nilai'];

mysqli_query($conn,"INSERT INTO tbl_pelajaran(kode_pelajaran,tanggal,hari,nis,pelajaran,nilai) VALUES ('$kode_pelajaran','$tanggal','$hari','$nis','$pelajaran','$nilai')");
header("location:pelajaran-tambah.php?msg=added")
?>