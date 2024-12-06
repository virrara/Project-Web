<?php  
include "config.php";
if(isset($_POST["id_kategori"]))
{
 $output = '';
 $query = "SELECT * FROM kategori_mustahik WHERE id_kategori = '".$_POST["id_kategori"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="40%"><label>Nama Kategori</label></td>  
            <td width="60%">: '.$row["nama_kategori"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label>Jumlah Hak</label></td>  
            <td width="60%">: '.$row["jumlah_hak"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>