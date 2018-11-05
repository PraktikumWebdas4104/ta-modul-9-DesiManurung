<?php 
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
	$array2 = explode(", ", $d['genre']);
	$array8 = explode(", ", $d['wisata']);
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		
		<td> <input type="checkbox" name="genre[]" value="horor" <?php if(in_array('horror',$array2)){echo "checked=checked";} ?> > horor <br>
 		<input type="checkbox" name="genre[]" value="anime" <?php if(in_array('anime',$array2)){echo "checked=checked";} ?> > anime <br>
 		<input type="checkbox" name="genre[]" value="action" <?php if(in_array('action',$array2)){echo "checked=checked";} ?> > action<br> 
 		<input type="checkbox" name="genre[]" value="drama" <?php if(in_array('drama',$array2)){echo "checked=checked";} ?> > drama<br> 
 		<input type="checkbox" name="genre[]" value="thriller" <?php if(in_array('thriller',$array2)){echo "checked=checked";} ?> > thriller<br> 
 		</td>
	</tr>
	<tr>
		<td>Tempat Wisata</td>
		<td> <input type="checkbox" name="wisata[]" value="Bali" <?php if(in_array('Bali',$array8)){echo "checked=checked";} ?> > Bali<br>
 		<input type="checkbox" name="wisata[]" value="Raja Ampat" <?php if(in_array('Raja Ampat',$array8)){echo "checked=checked";} ?> > Raja Ampat <br>
 		<input type="checkbox" name="wisata[]" value="Pulau Derawan" <?php if(in_array('Pulau Derawan',$array8)){echo "checked=checked";} ?> > Pulau Derawan<br> 
 		<input type="checkbox" name="wisata[]" value="Bangka Belitung" <?php if(in_array('Bangka Belitung',$array8)){echo "checked=checked";} ?> > Bangka Belitung<br> 
 		<input type="checkbox" name="wisata[]" value="Labuan Bajo" <?php if(in_array('Labuan Bajo',$array8)){echo "checked=checked";} ?> > Labuan Bajo<br> 
 		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
