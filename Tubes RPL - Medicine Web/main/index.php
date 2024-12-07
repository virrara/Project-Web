<?php
$temp = explode(" ", $username);
$first_name = $temp[0];

if ( isset($first_name) ) {
	create_table($first_name);
}

if ($rows = mysqli_query($conn, "SELECT * FROM history$first_name")) {
	$vaksin = query("SELECT jenis_vaksin FROM data$first_name");
 	foreach ($vaksin as $key) {
 		$vaksin = $key['jenis_vaksin'];
 		 
 	}

 	$ket = query("SELECT ket FROM data$first_name");
 	foreach ($ket as $key) {
 		$ket = $key['ket'];
 		if ( $ket == "Anda Telah Vaksinasi Tahap 1" ) {
 			$ket = "1";
 		}
 		if ( $ket == "Anda Telah Vaksinasi Tahap 2" ) {
 			$ket = "2";
 		}
 	}
} else {
	$show = true;
}

?>

<style type="text/css">
	ul{
		list-style: none;
		padding-left: 0;
	}
</style>

<!-- jika seluruh data telah diinput form ini akan hilang -->
<?php if ( !isset($_POST['thp']) && !isset($_POST['tgl']) && !isset($info) ) : ?>
	<p class="h4 text-gray-900">Pilih Jenis Vaksin</p>
	<form id="vaksin" action="" method="post">
		<ul>
			<li>
				<input id="vaksin1" type="radio" name="vaksin" value="AstraZeneca" required
				<?php 
				if (!isset($show)) {
				    if ( isset($vaksin) && $vaksin == "AstraZeneca" ) {
    					echo "checked=checked";
    				} else {
    					echo "disabled=disabled";
    				} 
				}
				?>>
				<label class="small" for="vaksin1">Covid-19 Oxford-AstraZeneca</label>
			</li>
			<li>
				<input id="vaksin2" type="radio" name="vaksin" value="Sinopharm" required 
				<?php 
				if (!isset($show)) {
				if ( isset($vaksin) && $vaksin == "Sinopharm" ) {
    					echo "checked=checked";
    				} else {
    					echo "disabled=disabled";
    				} 
				} ?>>
				<label class="small" for="vaksin2">Covid-19 China National Pharmaceutical Group (Sinopharm)</label>
			</li>
			<li>
				<input id="vaksin3" type="radio" name="vaksin" value="Moderna" required 
				<?php 
				if (!isset($show)) {
				if ( isset($vaksin) && $vaksin == "Moderna") {
    					echo "checked=checked";
    				} else {
    					echo "disabled=disabled";
    				}
				}?>>
				<label class="small" for="vaksin3">Covid-19 Moderna</label>
			</li>
			<li>
				<input id="vaksin4" type="radio" name="vaksin" value="Pfizer" required 
				<?php 
				if (!isset($show)) {
				if ( isset($vaksin) && $vaksin == "Pfizer" ) {
    					echo "checked=checked";
    				} else {
    					echo "disabled=disabled";
    				}
				} ?>>
				<label class="small" for="vaksin4">Covid-19 Pfizer-BioNTech</label>
			</li>
			<li>
				<input id="vaksin5" type="radio" name="vaksin" value="Sinovac" required 
				<?php 
				if (!isset($show)) {
				if ( isset($vaksin) && $vaksin == "Sinovac" ) {
    					echo "checked=checked";
    				} else {
    					echo "disabled=disabled";
    				}
				} ?>>
				<label class="small" for="vaksin5">Covid-19 Sinovac</label>
			</li>
			<li>
				<input id="vaksin6" type="radio" name="vaksin" value="Novavax" required 
				<?php 
				if (!isset($show)) {
				if ( isset($vaksin) && $vaksin == "Novavax" ) {
    					echo "checked=checked";
    				} else {
    					echo "disabled=disabled";
    				}
    			} ?>>
				<label class="small" for="vaksin6">Covid-19 Novavax</label>
			</li>	
			<li>
				<button type="submit" class="btn btn-outline-info" name="input_vk">Simpan</button>	
			</li>
		</ul>
	</form>
<?php endif; ?>

<!-- input jenis vaksin ke tabel -->
<?php if ( isset($_POST['vaksin']) ) {
	add_vk($first_name,$_POST['vaksin']);
} ?>

<!-- jika belum milih jenis vaksin dan tidak ada var info, form ini tidak akan tampil -->
<?php if ( isset($_POST['vaksin']) && isset($info) ) : ?>
	<p class="h4 text-gray-900"><?= $_POST['vaksin']; ?></p>
	<p class="small" align="justify" style="padding-bottom: 20px;"><?= $info; ?></p>

	<p class="h4 text-gray-900">Gejala Apa Yang Anda Alami</p>
	<form action="" method="post">
		<ul>

			<?php $i = 0;
			foreach ($jenis['umum'] as $key) : ?>
				<li>
					<input id="gejala<?= $i ?>" type="radio" name="gejala" value="<?= $key ?>" required>
					<label class="small" for="gejala<?= $i ?>"><?= $key; ?></label>
				</li>
			<?php $i++; endforeach; ?>

			<?php $x = 1;
			foreach ($jenis['jarang'] as $key) : ?>
				<li>
					<input id="gejala<?= $i ?>" type="radio" name="gejala" value="<?= $key ?>" required>
					<label class="small" for="gejala<?= $i ?>"><?= $key; ?></label>
				</li>
			<?php $i++; endforeach; ?> 

		</ul>

		<p class="h4 text-gray-900">Penjadwalan Vaksinasi</p>
		<ul>
			<li>
				<input id="thp1" type="radio" name="thp" value="1" required 
				<?php 
				if (!isset($show)) {
				if ( isset($ket) && $ket == "1") {
    					echo "disabled=disabled";
    				} else {
    					echo "checked=checked";
    				}
				} ?>>
				<label class="small" for="thp1">Saya Sudah Vaksinasi Tahap 1</label>
			</li>
			<li>
				<input id="thp2" type="radio" name="thp" value="2" required 
				<?php 
				if (!isset($show)) {
				if ( isset($ket) && $ket == "2" ) {
    					echo "disabled=disabled";
    				} else {
    					echo "checked=checked";
    				} 
    			} ?>>
				<label class="small" for="thp2">Saya Sudah Vaksinasi Tahap 2</label>
			</li>	
			<li>
				<button type="submit" class="btn btn-outline-danger" name="kembali" onclick="goBack();">Kembali</button>	
				<button type="submit" class="btn btn-outline-info" name="input_gjl_thp">Simpan</button>	
			</li>
		</ul>
	</form>
<?php endif ?>

<!-- input data gejala dan tindakan ke dalam tabel -->
<?php if ( isset($_POST['gejala']) ) {
		$hidden = true;
		add_gejala($first_name,$_POST['gejala']);

		$rows = query("SELECT jenis_vaksin FROM data$first_name")[0]['jenis_vaksin'];
		$jenis = temp_arr($rows);

		if ( in_array($_POST['gejala'], $jenis['umum']) ) {
			$text = "Tidak Perlu Khawatir Gejala Anda Umum";
			add_tindakan($first_name,$text);
		}

		if ( in_array($_POST['gejala'], $jenis['jarang']) ) {
			$text = "Anda Sebaiknya Menghubungi Dokter";
			add_tindakan($first_name,$text);
		}
	} 

	if ( isset($_POST['thp']) ) {
		$text = "Anda Telah Vaksinasi Tahap " . $_POST['thp'];
		add_ket($first_name,$text);
	}

	?>

<!-- tampil jika user belum vaksin tahap 2 -->
<?php if ( isset($_POST['thp']) && $_POST['thp'] == 1 ) : ?>
	<form action="" method="post">
		<ul>
			<li>
				<label class="small" for="tgl">Kapan Anda Vaksinasi Tahap 1 : </label>
				<input id="tgl" type="date" name="tgl" placeholder="dd/mm/yyyy" required>
			</li>
			<li>
				<button type="submit" class="btn btn-outline-danger" name="kembali" onclick="goBack();">Kembali</button>	
				<button type="submit" class="btn btn-outline-info" name="input_tgl">Simpan</button>	
			</li>
		</ul>
	</form>
<?php endif; ?>

<!-- input tgl vaksinasi user -->
<?php if ( isset($_POST['tgl']) )  {
	$rows = query("SELECT jenis_vaksin FROM data$first_name")[0]['jenis_vaksin'];
	$jenis = temp_arr($rows);

	$min = date('d-m-Y', strtotime($jenis['penjadwalan'][0],strtotime($_POST['tgl'])));
	$text ="";
	if ( $jenis['penjadwalan'][1] !== 0) {
		$max = date('d-m-Y', strtotime($jenis['penjadwalan'][1],strtotime($_POST['tgl'])));
		$text = " Sampai " . $max;
	}
	
	$result = "Vaksin Tahap 1 = " . $_POST['tgl'] . "<br>Vaksinasi Selanjutnya Pada " . $min . $text;

	add_penjadwalan($first_name,$result);
} ?>

<!-- tampil jika user input tgl atau user memilih vaksin tahap 2  -->
<?php 
$rows = query("SELECT ket FROM data$first_name")[0]['ket'];

if (  isset($_POST['tgl']) || (isset($_POST['input_gjl_thp']) && $rows == "Anda Telah Vaksinasi Tahap 2") ) : ?>
	
	<p class="h4 text-gray-900">Berikut Adalah Data Kamu</p>
	<table border="0" cellpadding="10">

<?php 

// hasil dari pilihan user tampil disini
$rows = query("SELECT * FROM data$first_name");
foreach ($rows as $key) : ?>
		<tr>
			<th>Nama</th>
			<td><?= ucwords($username) ?></td>
		</tr>
		<tr>
			<th>Jenis Vaksin</th>
			<td><?= $key['jenis_vaksin']; ?></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><?= $key['ket']; ?></td>
		</tr>

		<?php if ( isset($_POST['tgl']) ) : ?>
		<tr>
			<th>Penjadwalan</th>
			<td><?= $key['penjadwalan']; ?></td>
		</tr>
		<?php endif; ?>
		
		<tr>
			<th>Gejala</th>
			<td><?= $key['gejala']; ?></td>
		</tr>
		<tr>
			<th>Tindakan</th>
			<td><?= $key['tindakan']; ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit" class="btn btn-outline-danger" onclick="goBack()">kembali</button>
				<a class="btn btn-outline-info" data-toggle="modal" data-target="#simpan_data">Simpan Data</a>		
			</td>
		</tr>
	</table>

<?php endforeach; ?>
<?php endif; ?>

<script type="text/javascript">
	function goBack() {
		window.history.back();
	}
</script>

<?php
$ket = query("SELECT ket FROM data$first_name")[0]['ket'];

if ( $ket == "Anda Telah Vaksinasi Tahap 1" ) {
	$id = "0";
} elseif( $ket == "Anda Telah Vaksinasi Tahap 2" ) {
	$id = "1";
}

?>

<!-- selesai -->