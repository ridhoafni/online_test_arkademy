<?php
	include "../koneksi.php";
	$id=$_POST['id'];
	$name = $_POST['name_hobby'];
	$id_category = $_POST['id_category'];
	$modal=mysqli_query($koneksi,"UPDATE hobi SET name_hobby = '$name', id_category = '$id_category' WHERE id = '$id'");
	header('location:data_hobi.php');
?>