<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_zakat   = $_GET['id_zakat'];
// query SQL untuk insert data
$query="DELETE from bayarzakat where id_zakat='$id_zakat'";
mysqli_query($conn, $query);
// mengalihkan ke halaman bayar.php
header("location:pengumpulan-zakat.php");
?>