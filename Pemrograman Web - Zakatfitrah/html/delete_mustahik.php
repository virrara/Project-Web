<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_kategori   = $_GET['id_kategori'];
// query SQL untuk insert data
$query="DELETE from kategori_mustahik where id_kategori='$id_kategori'";
mysqli_query($conn, $query);
// mengalihkan ke halaman mustahik.php
header("location:mustahik.php");
?>