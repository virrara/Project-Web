<script>
$('#update_form').on("submit", function(event){  
if(nama_muzakki!="" && jumlah_tanggungan!=""){
   $.ajax({  
    url:"update_muzakki.php",  
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
if(isset($_POST["id_muzakki"]))
{
 $output = '';
 $query = "SELECT * FROM muzakki WHERE id_muzakki = '".$_POST["id_muzakki"]."'";
 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
     $output .= '
         <form method="post" id="update_form">
     <label>Nama Muzzaki</label>
     <input type="hidden" name="id_muzakki" id="id_muzakki" value="'.$_POST["id_muzakki"].'" class="form-control" />
     <input type="text" name="nama_muzakki" id="enama" value="'.$row['nama_muzakki'].'" class="form-control" />
     <br />
     <label>Jumlah Tanggungan</label>
     <input type="text" name="jumlah_tanggungan" id="etanggungan" value="'.$row['jumlah_tanggungan'].'" class="form-control" />
     <br />
     <label>Keterangan</label>
     <input type="text" name="keterangan" id="eket" value="'.$row['keterangan'].'" class="form-control" />
    ';

     $output .= '
     <div class="form-group text-center"><br>
     <input type="submit" name="update" id="update" value="Update" class="btn btn-primary" />
     </div>

    </form>
     ';
    echo $output;
}
?>
