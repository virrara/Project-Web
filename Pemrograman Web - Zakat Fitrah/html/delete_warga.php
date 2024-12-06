<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id_mustahikwarga   = $_GET['id_mustahikwarga'];
// query SQL untuk insert data
$query="DELETE from mustahik_warga where id_mustahikwarga='$id_mustahikwarga'";
mysqli_query($conn, $query);
// mengalihkan ke halaman distribusi warga.php
header("location:distribusi-warga.php");
?>