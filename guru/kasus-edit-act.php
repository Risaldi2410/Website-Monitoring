<?php 
include'../koneksi.php';
$kode_kasus=$_POST['kode_kasus'];
$tanggal=$_POST['tanggal'];
$kasus=$_POST['kasus'];
$nis=$_POST['nis'];
$saran=$_POST['saran'];

mysqli_query($conn,"UPDATE tbl_kasus set tanggal='$tanggal',kasus='$kasus',nis='$nis',saran='$saran' where kode_kasus='$kode_kasus'");
echo "<script>
			alert('Data Kasus Santri berhasil diupdate');
			document.location.href='kasus.php';
		  </script>";
		  return;
?>