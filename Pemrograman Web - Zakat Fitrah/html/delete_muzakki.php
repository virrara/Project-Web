<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_muzakki   = $_GET['id_muzakki'];
// query SQL untuk insert data
$query="DELETE from muzakki where id_muzakki='$id_muzakki'";
mysqli_query($conn, $query);
// mengalihkan ke halaman muzakki.php
header("location:muzakki.php");
?>