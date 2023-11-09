<?php 
include'../koneksi.php';
$kode_kesehatan=$_POST['kode_kesehatan'];
$tanggal=$_POST['tanggal'];
$nis=$_POST['nis'];
$diagnosa=$_POST['diagnosa'];
$pengobatan=$_POST['pengobatan'];

mysqli_query($conn,"UPDATE tbl_kesehatan set tanggal='$tanggal',nis='$nis',diagnosa='$diagnosa',pengobatan='$pengobatan' where kode_kesehatan='$kode_kesehatan'");
echo "<script>
			alert('Data Kesehatan Santri berhasil diupdate');
			document.location.href='kesehatan.php';
		  </script>";
		  return;
?>