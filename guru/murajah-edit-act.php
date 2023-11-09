<?php 
include'../koneksi.php';
$kode_murajah=$_POST['kode_murajah'];
$tanggal=$_POST['tanggal'];
$hari=$_POST['hari'];
$nis=$_POST['nis'];
$halaman=$_POST['halaman'];
$jumlah=$_POST['jumlah'];
$nilai=$_POST['nilai'];

mysqli_query($conn,"UPDATE tbl_murajah set tanggal='$tanggal',hari='$hari',nis='$nis',halaman='$halaman',jumlah='$jumlah',nilai='$nilai' where kode_murajah='$kode_murajah'");
echo "<script>
			alert('Data Murajah berhasil diupdate');
			document.location.href='murajah.php';
		  </script>";
		  return;
?>