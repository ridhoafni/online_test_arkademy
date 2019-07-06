<?php
include "../koneksi.php";
$id = $_POST['id'];
$name = $_POST['name_hobby'];
$kategori = $_POST['id_category'];
mysqli_query($koneksi,"INSERT INTO hobi (id,name_hobby,id_category) VALUES ('$id','$name','$kategori')");
header('location:data_hobi.php');
?>