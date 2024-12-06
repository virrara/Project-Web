<?php
include 'config.php';
$kategori = $_GET['kategori'];
$query = mysqli_query($conn, "select * from kategori_mustahik where nama_kategori='$kategori'");
$kategori_mustahik = mysqli_fetch_array($query);
$data = array(
            'hal'      =>  $kategori_mustahik['hak'],);
 echo json_encode($data);
?>