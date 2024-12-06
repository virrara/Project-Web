<?php
include "config.php";
if(!empty($_POST))
{  
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);  
    $kategori = mysqli_real_escape_string($conn, $_POST["kategori"]);  
    $hak = mysqli_real_escape_string($conn, $_POST["hak"]);  
    
    $query = "INSERT INTO mustahik_warga(nama, kategori, hak) VALUES ('$nama','$kategori','$hak')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header("location:distribusi-warga.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>