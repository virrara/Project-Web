<?php
include "config.php";    

    $data_fakir = mysqli_query($conn, "SELECT * FROM mustahik_warga WHERE kategori='FAKIR'");
    $jml_fakir = mysqli_num_rows($data_fakir);

    $data_miskin = mysqli_query($conn, "SELECT * FROM mustahik_warga WHERE kategori='MISKIN'");
    $jml_miskin = mysqli_num_rows($data_miskin);

    $data_mampu = mysqli_query($conn, "SELECT * FROM mustahik_warga WHERE kategori='MAMPU'");
    $jml_mampu = mysqli_num_rows($data_mampu);

    $data_amil = mysqli_query($conn, "SELECT * FROM mustahik_lainnya WHERE kategori='AMILIN'");
    $jml_amil = mysqli_num_rows($data_amil);

    $data_fisabilillah = mysqli_query($conn, "SELECT * FROM mustahik_lainnya WHERE kategori='FISABILILLAH'");
    $jml_fisabilillah = mysqli_num_rows($data_fisabilillah);

    $data_mualaf = mysqli_query($conn, "SELECT * FROM mustahik_lainnya WHERE kategori='MUALAF'");
    $jml_mualaf = mysqli_num_rows($data_mualaf);

    $data_ibnsabil = mysqli_query($conn, "SELECT * FROM mustahik_lainnya WHERE kategori='IBNU SABIL'");
    $jml_ibnsabil = mysqli_num_rows($data_ibnsabil);

    $total_kk = $jml_fakir + $jml_miskin + $jml_mampu;

    $total_beras_warga = (21*$jml_fakir) + (8*$jml_miskin) + (4*$jml_mampu);

    $total_kk_lain = $jml_amil + $jml_fisabilillah + $jml_mualaf + $jml_ibnsabil;

    $total_beras_lain = (10*$jml_amil) + (3*$jml_fisabilillah) + (4*$jml_mualaf) +(4*$jml_ibnsabil);
?>