<script>
$('#confirm_form').on("submit", function(event){  
if(nama_muzakki!="" && jumlah_tanggungan!=""){
   $.ajax({  
    url:"confirm_bayar.php",  
    type:"POST",  
    data:$('#confirm_form').serialize(),  
    beforeSend:function(){  
     $('#update').val("Updating");  
    },  
    success:function(data){  
     $('#confirm_form')[0].reset();  
     $('#bayarModal').modal('hide');
     $("#success").show();
	 $('#success').html('Pembayaran Sukses !');   
    }  
   });  
  }  
 });
</script>

<?php 
include "config.php";
if(isset($_POST["id_muzakki"]))
{
 $output = '';
 $query = "SELECT * FROM muzakki WHERE id_muzakki = '".$_POST["id_muzakki"]."'";
 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
     $output .= '
         <form method="post" id="confirm_form">
     <label>Nama Muzzaki/KK</label>
     <input type="hidden" name="id_muzakki" id="id_muzakki" value="'.$_POST["id_muzakki"].'" class="form-control" />
     <input type="text" name="nama_KK" id="enama" value="'.$row['nama_muzakki'].'" class="form-control" />
     <br />
     <label>Jumlah Tanggungan</label>
     <input type="text" name="jumlah_tanggungan" id="etanggungan" value="'.$row['jumlah_tanggungan'].'" class="form-control" />
     <br />
     <label>Jenis Bayar</label>
        <select class="custom-select mr-sm-2" name="jenis_bayar" id="jenis_bayar">
            <option selected>Choose...</option>
            <option value="Beras">Beras</option>
            <option value="Uang">Uang</option>
        </select>
     <br />
     <br />
     <label>Jumlah Tanggungan Yang Dibayar</label>
     <input type="text" name="jumlah_tanggunganyangdibayar" id="etanggungan_bayar" class="form-control" />
     <br />
     <label>Beras</label>
     <input type="text" name="bayar_beras" id="ebayar_beras" class="form-control" />
     <br />
     <label>Uang</label>
     <input type="text" name="bayar_uang" id="ebayar_uang" class="form-control" />
     <br />

    ';

     $output .= '
     <div class="form-group text-center"><br>
     <input type="submit" name="bayar" id="bayar" value="Confirm" class="btn btn-primary" />
     </div>

    </form>
     ';
    echo $output;
    $delete = $conn->query("DELETE FROM muzakki WHERE id_muzakki = '".$_POST["id_muzakki"]."'");
    $result = mysqli_query($conn, $delete);
}
?>
