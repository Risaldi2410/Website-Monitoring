<?php 
include'koneksi.php';
$kode_user=$_POST['kode_user'];
$nama_lengkap=$_POST['nama_lengkap'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];

mysqli_query($conn,"INSERT INTO tbl_user(kode_user,nama_lengkap,username,password,level) VALUES ('$kode_user','$nama_lengkap','$username','$password','$level')");
header("location:index.php?pesan=berhasil")
?>