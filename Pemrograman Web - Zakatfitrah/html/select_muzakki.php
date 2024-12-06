<?php  
include "config.php";
if(isset($_POST["id_muzakki"]))
{
 $output = '';
 $query = "SELECT * FROM muzakki WHERE id_muzakki = '".$_POST["id_muzakki"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Nama Muzakki</label></td>  
            <td width="70%">: '.$row["nama_muzakki"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Tanggungan</label></td>  
            <td width="70%">: '.$row["jumlah_tanggungan"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Keterangan</label></td>  
            <td width="70%">: '.$row["keterangan"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>