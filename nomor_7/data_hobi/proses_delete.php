<?php
	include "../koneksi.php";
	$id=$_GET['id'];
	$modal=mysqli_query($koneksi,"Delete FROM hobi WHERE id='$id'");
	header('location:data_hobi.php');
?>