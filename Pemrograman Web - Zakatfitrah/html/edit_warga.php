<script>
$('#update_form').on("submit", function(event){  
if(nama!="" && kategori!="" && hak!=""){
   $.ajax({  
    url:"update_warga.php",  
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
if(isset($_POST["id_mustahikwarga"]))
{
 $output = '';
 $query = "SELECT * FROM mustahik_warga WHERE id_mustahikwarga = '".$_POST["id_mustahikwarga"]."'";
 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
     $output .= '
         <form method="post" id="update_form">
     <label>Nama Muzzaki</label>
     <input type="hidden" name="id_mustahikwarga" id="id_mustahikwarga" value="'.$_POST["id_mustahikwarga"].'" class="form-control" />
     <input type="text" name="nama" id="enama" value="'.$row['nama'].'" class="form-control" />
     <br />
     <input type="hidden" name="id_mustahikwarga" id="id_mustahikwarga" value="'.$_POST["id_mustahikwarga"].'" class="form-control" />
     <br />
     <label>Kategori Mustahik</label>
     <select name="kategori" id="kategori" class="form-control">';
     if($row['kategori']=="Fakir"){
        $output .= '<option selected>Fakir</option>
        <option value="Miskin">Miskin</option>
        <option value="Mampu">Mampu</option>';
    }elseif($row['kategori']=="Miskin"){
        $output .= '<option selected>Miskin</option>
        <option value="Fakir">Fakir</option>
        <option value="Mampu">Mampu</option>';
    }elseif($row['kategori']=="Mampu"){
        $output .= '<option selected>Mampu</option>
        <option value="Fakir">Fakir</option>
        <option value="Miskin">Miskin</option>';
    }
    
    $output .= '</select>
    <label>Hak</label>
    <input type="text" name="hak" id="ehak" value="'.$row['hak'].'" class="form-control" />
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
