<?php

$conn = mysqli_connect("localhost", "root", "", "zakatfitrah");
if(!empty($_POST))
{
    $nama_KK = mysqli_real_escape_string($conn, $_POST["nama_KK"]);  
    $jumlah_tanggungan = mysqli_real_escape_string($conn, $_POST["jumlah_tanggungan"]); 
    $jenis_bayar = mysqli_real_escape_string($conn, $_POST["jenis_bayar"]); 
    $jumlah_tanggunganyangdibayar = mysqli_real_escape_string($conn, $_POST["jumlah_tanggunganyangdibayar"]); 
    $bayar_beras = mysqli_real_escape_string($conn, $_POST["bayar_beras"]); 
    $bayar_uang = mysqli_real_escape_string($conn, $_POST["bayar_uang"]); 
    $nama_muzakki = mysqli_real_escape_string($conn, $_POST["nama_muzakki"]); 

    $query = "INSERT INTO bayarzakat (nama_KK, jumlah_tanggungan, jenis_bayar, jumlah_tanggunganyangdibayar, bayar_beras, bayar_uang) 
    VALUES ('$nama_KK','$jumlah_tanggungan','$jenis_bayar','$jumlah_tanggunganyangdibayar','$bayar_beras','$bayar_uang')";

    $query_run = mysqli_query($conn, $query, $delete);
    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header("location:pengumpulan-zakat.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

// query SQL untuk insert data
$query="DELETE from muzakki where id_muzakki='$_GET[id_zakat]'";
mysqli_query($conn, $query);
// mengalihkan ke halaman muzakki.php
header("location:pengumpulan-zakat.php");
?>