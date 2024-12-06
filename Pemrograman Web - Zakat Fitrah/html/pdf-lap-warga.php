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
    <center><h2 text-align: "center">LAPORAN DISTRIBUSI ZAKAT FITRAH</center></h2></center>
    <h3><center>Mustahik Warga</center></h3><br><br><br>
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
            <td><span class="font-bold link ">Fakir</span></td>
            <td><a class="font-bold link">21 Kg</a></td>
            <td>'. $jml_fakir .'</td>
            <td>'. 21*$jml_fakir .' Kg</td>
        </tr>
        <tr>
            <td><span class="font-bold link">Miskin</span></td>
            <td><a class="font-bold link">8 Kg</a></td>
            <td>'. $jml_miskin .'</td>
            <td>'. 8*$jml_miskin .' Kg</td>
        </tr>
        <tr>
            <td><span class="font-bold link">Mampu</span></td>
            <td><a class="font-bold link">4 Kg</a></td>
            <td>'. $jml_mampu .'</td>
            <td>'. 4*$jml_mampu .' Kg</td>
        </tr>
    </tbody>';
$html .='</table> <br>
    <a><b>Total KK :</b> '. $total_kk .' Kepala Keluarga</a><br>
    <a><b>Total Beras yang Terdistribusi :</b> '. $total_beras_warga .' Kg</a>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('laporan-distribusi-mustahik-warga.pdf', \Mpdf\Output\Destination::INLINE);
?>


