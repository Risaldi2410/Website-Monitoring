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

mysqli_query($conn,"UPDATE tbl_tahsin set tanggal='$tanggal',hari='$hari',nis='$nis',jilid='$jilid',halaman='$halaman',surah='$surah',nilai='$nilai' where kode_tahsin='$kode_tahsin'");
echo "<script>
			alert('Data Tahsin berhasil diupdate');
			document.location.href='tahsin.php';
		  </script>";
		  return;
?>