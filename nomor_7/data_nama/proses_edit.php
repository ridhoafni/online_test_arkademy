<?php
	include "../koneksi.php";
	$id=$_POST['id'];
	$name = $_POST['name'];
	$id_hobby = $_POST['id_hobby'];
	$id_category = $_POST['id_category'];
	$modal=mysqli_query($koneksi,"UPDATE nama SET name = '$name',id_hobby = '$id_hobby', id_category = '$id_category' WHERE id = '$id'");
	header('location:data_nama.php');
?>