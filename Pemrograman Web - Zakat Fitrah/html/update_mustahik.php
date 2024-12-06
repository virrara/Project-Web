<?php

$conn = mysqli_connect("localhost", "root", "", "zakatfitrah");
if(!empty($_POST))
{
    $nama_kategori = mysqli_real_escape_string($conn, $_POST["nama_kategori"]);  
    $jumlah_hak = mysqli_real_escape_string($conn, $_POST["jumlah_hak"]); 
    $query = "UPDATE kategori_mustahik SET nama_kategori = '$nama_kategori', jumlah_hak ='$jumlah_hak' WHERE id_kategori = '$_POST[id_kategori]'
    ";
    
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