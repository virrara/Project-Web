<script>
$('#update_form').on("submit", function(event){  
if(nama_kategori!="" && jumlah_hak!=""){
   $.ajax({  
    url:"update_mustahik.php",  
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
if(isset($_POST["id_kategori"]))
{
 $output = '';
 $query = "SELECT * FROM kategori_mustahik WHERE id_kategori = '".$_POST["id_kategori"]."'";
 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
     $output .= '
         <form method="post" id="update_form">
     <input type="hidden" name="id_kategori" id="id_kategori" value="'.$_POST["id_kategori"].'" class="form-control" />
     <br />
     <label>Kategori Mustahik</label>
     <select name="nama_kategori" id="nama_kategori" class="form-control">';
     if($row['nama_kategori']=="Amil"){
        $output .= '<option selected>Amil</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }elseif($row['nama_kategori']=="Fakir I"){
        $output .= '<option selected>Fakir I</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }elseif($row['nama_kategori']=="Fakir II"){
        $output .= '<option selected>Fakir II</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }elseif($row['nama_kategori']=="Miskin I"){
        $output .= '<option selected>Miskin I</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }elseif($row['nama_kategori']=="Miskin II"){
        $output .= '<option selected>Miskin II</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }elseif($row['nama_kategori']=="Fisabilillah (Ustad)"){
        $output .= '<option selected>Fisabilillah (Ustad)</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }elseif($row['nama_kategori']=="Fisabilillah (Santri)"){
        $output .= '<option selected>Fisabilillah (Santri)</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }elseif($row['nama_kategori']=="Mampu"){
        $output .= '<option selected>Mampu</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }elseif($row['nama_kategori']=="Lainnya"){
        $output .= '<option selected>Lainnya</option>
        <option value="Amin">Amil</option>
        <option value="Fakir I">Fakir I</option>
        <option value="Fakir II">Fakir II</option>
        <option value="Miskin I">Miskin I</option>
        <option value="Miskin II">Miskin II</option>
        <option value="Fisabilillah (Ustad)">Fisabilillah (Ustad)</option>
        <option value="Fisabilillah (Santri)">Fisabilillah (Santri)</option>
        <option value="Mampu">Mampu</option>
        <option value="Lainnya">Lainnya</option>';
    }
    $output .= '</select>
     <br />
     <label>Jumlah Hak</label>
     <input type="text" name="jumlah_hak" id="ehak" value="'.$row['jumlah_hak'].'" class="form-control" />
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
