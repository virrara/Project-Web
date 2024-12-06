<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_mustahiklainnya   = $_GET['id_mustahiklainnya'];
// query SQL untuk insert data
$query="DELETE from mustahik_lainnya where id_mustahiklainnya='$id_mustahiklainnya'";
mysqli_query($conn, $query);
// mengalihkan ke halaman distribusi .php
header("location:distribusi-mustahiklain.php");
?>