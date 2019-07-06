<?php
include "../koneksi.php";
$id = $_POST['id'];
$name = $_POST['name'];
$hobby = $_POST['id_hobby'];
$kategori = $_POST['id_category'];
mysqli_query($koneksi,"INSERT INTO nama (id,name,id_hobby,id_category) VALUES ('$id','$name','$hobby','$kategori')");
header('location:data_nama.php');
?>