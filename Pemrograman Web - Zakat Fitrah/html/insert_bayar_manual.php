<?php
include "config.php";
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
    $query_run = mysqli_query($conn, $query);

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
?>