<?php  
include "config.php";
if(isset($_POST["id_zakat"]))
{
 $output = ''; 
 $query = "SELECT * FROM bayarzakat WHERE id_zakat = '".$_POST["id_zakat"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="40%"><label>Nama Muzakki/KK</label></td>  
            <td width="60%">: '.$row["nama_KK"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Jumlah Tanggungan</label></td>  
            <td width="60%">: '.$row["jumlah_tanggungan"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Jenis Bayar</label></td>  
            <td width="60%">: '.$row["jenis_bayar"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Jumlah Tanggungan Yang Dibayar</label></td>  
            <td width="60%">: '.$row["jumlah_tanggunganyangdibayar"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Beras</label></td>  
            <td width="60%">: '.$row["bayar_beras"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Uang</label></td>  
            <td width="60%">: '.$row["bayar_uang"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>