<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM tbl_user WHERE username='$username' and password='$password'");

$cek =mysqli_num_rows($query);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($query);

	if ($data['level']=='Guru') {
		// code...
		$_SESSION['username']= $username;
		$_SESSION['level']='Guru';
		header("location:guru/home.php");
	}else if($data['level']=='Pimpinan') {
		// code...
		$_SESSION['username']= $username;
		$_SESSION['level']='Pimpinan';
		header("location:pimpinan/home.php");
	}else if($data['level']=='Wali') {
		// code...
		$_SESSION['username']= $username;
		$_SESSION['level']='Wali';
		header("location:wali/home.php");
	}

}else{
	header("location:index.php?pesan=gagal");
}
?>