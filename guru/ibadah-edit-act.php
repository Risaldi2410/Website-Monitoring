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

mysqli_query($conn,"UPDATE tbl_ibadah set tanggal='$tanggal',hari='$hari',nis='$nis',tahajud='$tahajud',subuh='$subuh',duha='$duha',zuhur='$zuhur',ashar='$ashar',magrib='$magrib',isya='$isya',puasa='$puasa' where kode_ibadah='$kode_ibadah'");
echo "<script>
			alert('Data Ibadah Santri berhasil diupdate');
			document.location.href='ibadah.php';
		  </script>";
		  return;
?>