<?php
include "koneksi.php";
$name = $_POST['name'];
$hobby = $_POST['hobby'];
$kategori = $_POST['kategori'];
mysqli_query($koneksi,"INSERT INTO nama (name,id_hobby,id_category) VALUES ('$name','$hobby','kategori')");
header('location:index.php');
?>