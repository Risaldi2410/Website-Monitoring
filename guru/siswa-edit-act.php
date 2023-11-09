<?php
session_start();
require_once "../koneksi.php";

 if (isset($_POST['update'])) {
	$nis = $_POST['nis'];
	$nama = htmlspecialchars($_POST['nama']);
	$kelas = $_POST['kelas'];
	$alamat = htmlspecialchars($_POST['alamat']);
	$foto= htmlspecialchars($_FILES['image']['name']);

if (empty($foto)) {
	mysqli_query($conn,"UPDATE tbl_siswa set nama= '$nama',
				kelas   = '$kelas',
				alamat  = '$alamat',
				foto    = '$foto'
				WHERE NIS = '$nis'");

	echo "<script>
			alert('Data Siswa berhasil diupdate');
			document.location.href='siswa.php';
		  </script>";
		  return;
}else{
	$u=mysqli_query($conn,"SELECT * FROM tbl_siswa WHERE nis='$nis'");
	$us=mysqli_fetch_array($u);

	unlink("../assets/images/".$us['foto']);
	move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/".$_FILES['image']['name']);
	mysqli_query($conn,"UPDATE tbl_siswa set nama= '$nama',
				kelas   = '$kelas',
				alamat  = '$alamat',
				foto    = '$foto'
				WHERE NIS = '$nis'");
	echo "<script>
			alert('Data Siswa berhasil diupdate');
			document.location.href='siswa.php';
		  </script>";
		  return;
}
}
?>
