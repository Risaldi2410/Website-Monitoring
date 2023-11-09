<?php 
include'../koneksi.php';
$kode_pelajaran=$_POST['kode_pelajaran'];
$tanggal=$_POST['tanggal'];
$hari=$_POST['hari'];
$nis=$_POST['nis'];
$pelajaran=$_POST['pelajaran'];
$nilai=$_POST['nilai'];

mysqli_query($conn,"UPDATE tbl_pelajaran set tanggal='$tanggal',hari='$hari',nis='$nis',pelajaran='$pelajaran',nilai='$nilai' where kode_pelajaran='$kode_pelajaran'");
echo "<script>
			alert('Data Pelajaran berhasil diupdate');
			document.location.href='pelajaran.php';
		  </script>";
		  return;
?>