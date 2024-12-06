<?php
include "config.php";    

    $data_muzakki = mysqli_query($conn, "SELECT * FROM bayarzakat");
    $jml_muzakki = mysqli_num_rows($data_muzakki);

    
    $data_muzakki2 = mysqli_query($conn, "SELECT * FROM muzakki");
    $jml_muzakki2 = mysqli_num_rows($data_muzakki2);

    $mustahik = mysqli_query($conn, "SELECT * FROM mustahik_warga");
    $jml_mustahik = mysqli_num_rows($mustahik);

    $mustahik = mysqli_query($conn, "SELECT * FROM mustahik_lainnya");
    $jml_mustahik2 = mysqli_num_rows($mustahik);

    $mustahik_total = $jml_mustahik+$jml_mustahik2;
    $muzakki_total = $jml_muzakki+$jml_muzakki2;
?>