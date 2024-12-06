<?php
include "config.php";
if(!empty($_POST))
{  
    $nama_muzakki = mysqli_real_escape_string($conn, $_POST["nama_muzakki"]);  
    $jumlah_tanggungan = mysqli_real_escape_string($conn, $_POST["jumlah_tanggungan"]);  
    $keterangan = mysqli_real_escape_string($conn, $_POST["keterangan"]);  
    
    $query = "INSERT INTO muzakki(nama_muzakki, jumlah_tanggungan, keterangan) VALUES ('$nama_muzakki','$jumlah_tanggungan','$keterangan')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header("location:muzakki.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>