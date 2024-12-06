<?php
include "config.php";
if(!empty($_POST))
{  
    $nama_kategori = mysqli_real_escape_string($conn, $_POST["nama_kategori"]);  
    $jumlah_hak = mysqli_real_escape_string($conn, $_POST["jumlah_hak"]);  
    
    $query = "INSERT INTO kategori_mustahik(nama_kategori, jumlah_hak) VALUES ('$nama_kategori','$jumlah_hak')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header("location:mustahik.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>