<?php
	include "../koneksi.php";
	$id=$_GET['id'];
	$modal=mysqli_query($koneksi,"Delete FROM kategori WHERE id='$id'");
	header('location:data_kategori.php');
?>