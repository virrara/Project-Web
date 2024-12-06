<?php  
include "config.php";
if(isset($_POST["id_mustahiklainnya"]))
{
 $output = '';
 $query = "SELECT * FROM mustahik_lainnya WHERE id_mustahiklainnya = '".$_POST["id_mustahiklainnya"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Nama</label></td>  
            <td width="70%">: '.$row["nama"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Kategori</label></td>  
            <td width="70%">: '.$row["kategori"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Hak</label></td>  
            <td width="70%">: '.$row["hak"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>