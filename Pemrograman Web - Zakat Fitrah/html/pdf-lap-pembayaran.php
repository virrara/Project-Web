<?php

require_once __DIR__ . '/vendor/autoload.php';
include "config.php";
include "total-muzakki.php";

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <title>YukZakat | laporan Pengumpulan Mustahik Warga<br><br><br><br><br><br></title>
    <link rel="stylesheet" href="print2.css">
</head>

<body>
    <br><br><br><center><h2>LAPORAN PENGUMPULAN ZAKAT FITRAH</center></h2></center>
    <br><br><br><table border="1" cellspacing="0" cellspadding="0" width="100%">
        <tr>
            <th>Total Muzakki</th>
            <th>Total Jiwa</th>
        </tr>
        <tr>
            <td><br><br><br><span class="font-bold link ">'.$jml_muzakki.' Kepala keluarga</span><br><br><br><br><br><br></td>
            <td><br><br><br><a class="font-bold link">'.number_format ($jml_jiwa["jml_jiwa"]).' Jiwa</a><br><br><br><br><br><br></td>
        </tr>

        <tr>
            <th>Total Beras</th>
            <th>Total Uang</th>
        </tr>
        <tr>
            <td><br><br><br><span class="font-bold link ">'.round($jml_beras["jml_beras"],2).' Kg</span><br><br><br><br><br><br></td>
            <td><br><br><br><a class="font-bold link">Rp. '.number_format ($jml_uang["jml_uang"],2,',','.').'</a><br><br><br><br><br><br></td>
        </tr>
    </table> <br>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('laporan-pembayaran-muzakki.pdf', \Mpdf\Output\Destination::INLINE);
?>
