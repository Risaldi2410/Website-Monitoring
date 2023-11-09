<?php 
include'../koneksi.php';
$kode_user=$_POST['kode_user'];
$nama_lengkap=$_POST['nama_lengkap'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];

$foto=$_FILES['foto']['name'];
$source=$_FILES['foto']['tmp_name'];
$folder='../assets/images/';

move_uploaded_file($source, $folder.$foto);

mysqli_query($conn,"INSERT INTO tbl_user(kode_user,foto,nama_lengkap,username,password,level) VALUES ('$kode_user','$foto','$nama_lengkap','$username','$password','$level')");
header("location:add-user.php?msg=added")
?>