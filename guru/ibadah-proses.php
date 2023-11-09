<?php 
include'../koneksi.php';
$kode_ibadah=$_POST['kode_ibadah'];
$tanggal=$_POST['tanggal'];
$hari=$_POST['hari'];
$nis=$_POST['nis'];
$tahajud=$_POST['tahajud'];
$subuh=$_POST['subuh'];
$duha=$_POST['duha'];
$zuhur=$_POST['zuhur'];
$ashar=$_POST['ashar'];
$magrib=$_POST['magrib'];
$isya=$_POST['isya'];
$puasa=$_POST['puasa'];

mysqli_query($conn,"INSERT INTO tbl_ibadah(kode_ibadah,tanggal,hari,nis,tahajud,subuh,duha,zuhur,ashar,magrib,isya,puasa) VALUES ('$kode_ibadah','$tanggal','$hari','$nis','$tahajud','$subuh','$duha','$zuhur','$ashar','$magrib','$isya','$puasa')");
header("location:ibadah-tambah.php?msg=added")
?>