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

mysqli_query($conn,"UPDATE tbl_tahfiz set tanggal='$tanggal',hari='$hari',nis='$nis',surah1='$surah1',ayat1='$ayat1',surah2='$surah2',ayat2='$ayat2',surah3='$surah3',ayat3='$ayat3',jumlah='$jumlah',nilai='$nilai' where kode_tahfiz='$kode_tahfiz'");
echo "<script>
			alert('Data Tahfiz berhasil diupdate');
			document.location.href='tahfiz.php';
		  </script>";
		  return;
?>