<?php 
include'../koneksi.php';
$kode_tahfiz=$_POST['kode_tahfiz'];
$tanggal=$_POST['tanggal'];
$hari=$_POST['hari'];
$nis=$_POST['nis'];
$surah1=$_POST['surah1'];
$ayat1=$_POST['ayat1'];
$surah2=$_POST['surah2'];
$ayat2=$_POST['ayat2'];
$surah3=$_POST['surah3'];
$ayat3=$_POST['ayat3'];
$jumlah=$_POST['jumlah'];
$nilai=$_POST['nilai'];

mysqli_query($conn,"INSERT INTO tbl_tahfiz(kode_tahfiz,tanggal,hari,nis,surah1,ayat1,surah2,ayat2,surah3,ayat3,jumlah,nilai) VALUES ('$kode_tahfiz','$tanggal','$hari','$nis','$surah1','$ayat1','$surah2','$ayat2','$surah3','$ayat3','$jumlah','$nilai')");
header("location:tahfiz-tambah.php?msg=added")
?>