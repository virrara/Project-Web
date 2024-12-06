<script>
$('#update_form').on("submit", function(event){  
if(nama!="" && kategori!="" && hak!=""){
   $.ajax({  
    url:"update_mustahiklain.php",  
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
if(isset($_POST["id_mustahiklainnya"]))
{
 $output = '';
 $query = "SELECT * FROM mustahik_lainnya WHERE id_mustahiklainnya = '".$_POST["id_mustahiklainnya"]."'";
 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
     $output .= '
         <form method="post" id="update_form">
     <label>Nama Muzzaki</label>
     <input type="hidden" name="id_mustahiklainnya" id="id_mustahiklainnya" value="'.$_POST["id_mustahiklainnya"].'" class="form-control" />
     <input type="text" name="nama" id="enama" value="'.$row['nama'].'" class="form-control" />
     <br />
     <input type="hidden" name="id_mustahiklainnya" id="id_mustahiklainnya" value="'.$_POST["id_mustahiklainnya"].'" class="form-control" />
     <br />
     <label>Kategori Mustahik</label>
     <select name="kategori" id="kategori" class="form-control">';
     if($row['kategori']=="Amilin"){
        $output .= '<option selected>Amilin</option>
        <option value="Fisabilillah">Fisabilillah</option>
        <option value="Mualaf">Mualaf</option>
        <option value="Ibnu Sabil">Ibnu Sabil</option>';
    }elseif($row['kategori']=="Fisabilillah"){
        $output .= '<option selected>Fisabilillah</option>
        <option value="Amilin">Amilin</option>
        <option value="Mualaf">Mualaf</option>
        <option value="Ibnu Sabil">Ibnu Sabil</option>';
    }elseif($row['kategori']=="Mualaf"){
        $output .= '<option selected>Mualaf</option>
        <option value="Amilin">Amilin</option>
        <option value="Fisabilillah">Fisabilillah</option>
        <option value="Ibnu Sabil">Ibnu Sabil</option>';
    }elseif($row['kategori']=="Ibnu Sabil"){
        $output .= '<option selected>Ibnu Sabil</option>
        <option value="Amilin">Amilin</option>
        <option value="Fisabilillah">Fisabilillah</option>
        <option value="Mualaf">Mualaf</option>';
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
