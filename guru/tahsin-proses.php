<?php 
include'../koneksi.php';
$kode_tahsin=$_POST['kode_tahsin'];
$tanggal=$_POST['tanggal'];
$hari=$_POST['hari'];
$nis=$_POST['nis'];
$jilid=$_POST['jilid'];
$halaman=$_POST['halaman'];
$surah=$_POST['surah'];
$nilai=$_POST['nilai'];

mysqli_query($conn,"INSERT INTO tbl_tahsin(kode_tahsin,tanggal,hari,nis,jilid,halaman,surah,nilai) VALUES ('$kode_tahsin','$tanggal','$hari','$nis','$jilid','$halaman','$surah','$nilai')");
header("location:tahsin-tambah.php?msg=added")
?>