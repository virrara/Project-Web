<script>
$('#update_form').on("submit", function(event){  
if(nama_KK!="" && jumlah_tanggungan!="" && jenis_bayar!="" && jumlah_tanggunganyangdibayar!="" && bayar_beras!="" && bayar_uang!=""){
   $.ajax({  
    url:"update_databayar.php",  
    type:"POST",  
    data:$('#update_form').serialize(),  
    beforeSend:function(){  
     $('#update').val("Updating");  
    },  
    success:function(data){  
     $('#update_form')[0].reset();  
     $('#editModal').modal('hide');
     $("#success").show();
	 $('#success').html('Data added successfully !');   
    }  
   });  
  }  
 });
</script>

<?php 
include "config.php";
if(isset($_POST["id_zakat"]))
{
 $output = '';
 $query = "SELECT * FROM bayarzakat WHERE id_zakat = '".$_POST["id_zakat"]."'";
 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
     $output .= '
         <form method="post" id="update_form">
     <label>Nama Muzzaki</label>
     <input type="hidden" name="id_zakat" id="id_zakat" value="'.$_POST["id_zakat"].'" class="form-control" />
     <input type="text" name="nama_KK" id="enama" value="'.$row['nama_KK'].'" class="form-control" />
     <br />
     <input type="hidden" name="id_zakat" id="id_zakat" value="'.$_POST["id_zakat"].'" class="form-control" />
     <br />
     <label>Jumlah Tanggungan</label>
     <input type="text" name="jumlah_tanggungan" id="ejumlah_tanggungan" value="'.$row['jumlah_tanggungan'].'" class="form-control" />
     <br />
     <label>Jenis Bayar</label>
     <select name="jenis_bayar" id="jenis_bayar" class="form-control">';
     if($row['jenis_bayar']=="Beras"){
        $output .= '<option selected>Beras</option>
        <option value="Uang">Uang</option>';
    }elseif($row['jenis_bayar']=="Uang"){
        $output .= '<option selected>Uang</option>
        <option value="Beras">Beras</option>';
    }
    
    $output .= '</select><br/>
    <label>Jumlah Tanggungan Yang Dibayar</label>
    <input type="text" name="jumlah_tanggunganyangdibayar" id="ejumlah_tanggunganyangdibayar" value="'.$row['jumlah_tanggunganyangdibayar'].'" class="form-control" />
    <br />
    <label>Beras</label>
    <input type="text" name="bayar_beras" id="ebayar_beras" value="'.$row['bayar_beras'].'" class="form-control" />
    <br />
    <label>Uang</label>
    <input type="text" name="bayar_uang" id="ebayar_uang" value="'.$row['bayar_uang'].'" class="form-control" />
    <br />';

     $output .= '
     <div class="form-group text-center"><br>
     <input type="submit" name="update" id="update" value="Update" class="btn btn-primary" />
     </div>

    </form>
     ';
    echo $output;
}
?>
