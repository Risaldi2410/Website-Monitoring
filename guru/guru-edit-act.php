<?php
session_start();
require_once "../koneksi.php";

if (isset($_POST['update'])) {

	$nip     = htmlspecialchars($_POST['nip']);
	$nama    = htmlspecialchars($_POST['nama']);
	$telepon = htmlspecialchars($_POST['telepon']);
	$agama   = $_POST['agama'];
	$alamat  = htmlspecialchars($_POST['alamat']);
	$foto = htmlspecialchars($_FILES['image']['name']);

	$sqlGuru = mysqli_query($conn, "SELECT * FROM tbl_guru WHERE nip ='$nip'");
	$data = mysqli_fetch_array($sqlGuru);
	$curNIP = $data['nip'];

	$newNIP= mysqli_query($conn, "SELECT * FROM tbl_guru WHERE nip = '$nip'");

	if ($nip !== $curNIP) {
		if (mysqli_num_rows($newNIP) > 0) {
			header("location:guru.php?msg=cancel");
			return;
		}
	}
	if (empty($foto)) {
	mysqli_query($conn,"UPDATE tbl_guru SET 
				nama = '$nama',
				telepon = '$telepon',
				agama = '$agama',
				alamat = '$alamat',
				foto = '$foto'
				WHERE nip = '$nip'");

	echo "<script>
			alert('Data Guru berhasil diupdate');
			document.location.href='guru.php';
		  </script>";
		  return;

	header("location:guru.php?msg=update");
	return;
}else{
	$u=mysqli_query($conn,"SELECT * FROM tbl_guru WHERE nip='$nip'");
	$us=mysqli_fetch_array($u);

	unlink("../assets/images/".$us['foto']);
	move_uploaded_file($_FILES['image']['tmp_name'], "../assets/images/".$_FILES['image']['name']);
	mysqli_query($conn,"UPDATE tbl_guru SET 
				nama = '$nama',
				telepon = '$telepon',
				agama = '$agama',
				alamat = '$alamat',
				foto = '$foto'
				WHERE nip = '$nip'");
	echo "<script>
			alert('Data Guru berhasil diupdate');
			document.location.href='guru.php';
		  </script>";
		  return;

	header("location:guru.php?msg=update");
	return;
}
}
?>