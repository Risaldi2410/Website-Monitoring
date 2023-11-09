<?php 
if (!isset($_SESSION['username'])) {
	// code...
	header("location:index.php");
}
?>