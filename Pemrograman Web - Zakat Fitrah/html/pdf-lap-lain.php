<?php 
require_once __DIR__ . '/vendor/autoload.php';
require "config.php";
require "total-mustahik.php";

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <title>YukZakat | laporan Distribusi Mustahik Warga</title>
    <link rel="stylesheet" href="print.css">
</head>

<body>
    <center><h2>LAPORAN DISTRIBUSI ZAKAT FITRAH</center></h2></center>
    <h3><center>Mustahik Lainnya</center></h3><br><br><br>
    <table border="1" cellspacing="0" cellspadding="0" width="100%">
    <thead>
        <tr>
            <th>Kategori Mustahik</th>
            <th>Hak Beras</th>
            <th>Jumlah KK</th>
            <th>Total Beras</th>
        </tr>
    </thead>';
$html .='
    <tbody>
    <tr>
        <td>Amilin</td>
        <td>10 Kg</td>
        <td>'. $jml_amil .'</td>
        <td>'. 10*$jml_amil .' Kg</td>
    </tr>
    <tr>
        <td>Fisabilillah</td>
        <td>3 Kg</td>
        <td>'. $jml_fisabilillah .'</td>
        <td>'. 3*$jml_fisabilillah .' Kg</td>
    </tr>
    <tr>
        <td>Mualaf</td>
        <td>4 Kg</td>
        <td>'. $jml_mualaf .'</td>
        <td>'. 4*$jml_mualaf .' Kg</td>
    </tr>
    <tr>
        <td>Ibnu Sabil</span></td>
        <td>4 Kg</td>
        <td>'. $jml_ibnsabil .'</td>
        <td>'. 4*$jml_ibnsabil .' Kg</td>
    </tr>
    </tbody>';
$html .='</table> <br>
    <a><b>Total KK :</b> '. $total_kk_lain .' Kepala Keluarga</a><br>
    <a><b>Total Beras yang Terdistribusi :</b> '. $total_beras_lain .' Kg</a>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('laporan-distribusi-mustahik-lainnya.pdf', \Mpdf\Output\Destination::INLINE);
?>


