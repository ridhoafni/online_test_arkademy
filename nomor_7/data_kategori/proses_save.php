<?php
include "../koneksi.php";
$id = $_POST['id'];
$name = $_POST['name_category'];
mysqli_query($koneksi,"INSERT INTO kategori (id,name_category) VALUES ('$id','$name')");
header('location:data_kategori.php');
?>