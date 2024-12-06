<?php

$conn = mysqli_connect("localhost", "root", "", "zakatfitrah");
if(!empty($_POST))
{
    $nama_muzakki = mysqli_real_escape_string($conn, $_POST["nama_muzakki"]);  
    $jumlah_tanggungan = mysqli_real_escape_string($conn, $_POST["jumlah_tanggungan"]);  
    $keterangan = mysqli_real_escape_string($conn, $_POST["keterangan"]); 
    $query = "UPDATE muzakki SET nama_muzakki = '$nama_muzakki', jumlah_tanggungan = '$jumlah_tanggungan', keterangan ='$keterangan' WHERE id_muzakki = '$_POST[id_muzakki]'
    ";
    
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