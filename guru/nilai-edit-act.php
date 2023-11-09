<?php 
include'../koneksi.php';
$kode_nilai=$_POST['kode_nilai'];
$nis=$_POST['nis'];
$nilai=$_POST['nilai'];
$konversi=$_POST['konversi'];
$kesalahan=$_POST['kesalahan'];
$keterangan=$_POST['keterangan'];

mysqli_query($conn,"UPDATE tbl_nilai set nis='$nis',nilai='$nilai',konversi='$konversi',kesalahan='$kesalahan',keterangan='$keterangan' where kode_nilai='$kode_nilai'");
echo "<script>
			alert('Data Nilai berhasil diupdate');
			document.location.href='nilai.php';
		  </script>";
		  return;
?>