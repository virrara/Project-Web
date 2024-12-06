<?php
include "config.php";    

    $data_muzakki = mysqli_query($conn, "SELECT * FROM bayarzakat");
    $jml_muzakki = mysqli_num_rows($data_muzakki);

    $jml_jiwa=mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(jumlah_tanggungan) AS jml_jiwa FROM bayarzakat"));
    
    $jml_beras=mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(bayar_beras) AS jml_beras FROM bayarzakat"));

    $jml_uang=mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(bayar_uang) AS jml_uang FROM bayarzakat")); 
?>