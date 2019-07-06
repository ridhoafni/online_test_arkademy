<?php
	include "../koneksi.php";
	$id=$_POST['id'];
	$name = $_POST['name_category'];
	$modal=mysqli_query($koneksi,"UPDATE kategori SET name_category = '$name' WHERE id = '$id'");
	header('location:data_kategori.php');
?>