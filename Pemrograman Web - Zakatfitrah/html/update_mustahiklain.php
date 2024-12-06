<?php

$conn = mysqli_connect("localhost", "root", "", "zakatfitrah");
if(!empty($_POST))
{
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);  
    $kategori = mysqli_real_escape_string($conn, $_POST["kategori"]);  
    $hak = mysqli_real_escape_string($conn, $_POST["hak"]); 
    $query = "UPDATE mustahik_lainnya SET nama = '$nama', kategori = '$kategori', hak ='$hak' WHERE id_mustahiklainnya = '$_POST[id_mustahiklainnya]'
    ";
    
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header("location:distribusi-mustahiklain.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
?>