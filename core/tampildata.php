<table>
	<?php 

	include "config.php";
	if(isset($_POST['kriteria'])){
		$kriteria = $_POST['kriteria'];

	}else{
		$kriteria = '';
	}


	$query = "SELECT * FROM crips WHERE id_kriteria='".$kriteria."' ORDER BY id_crips ASC ";
	$hasil = mysqli_query($con, $query);
	while($data = mysqli_fetch_object($hasil)):
	 ?>

	 <tr>
	 	<td style="padding-right:10px;"><input type="radio" name="nilai" value="<?= $data->keterangan ?>" id="<?= $data->keterangan ?>"><?= $data->keterangan ?> </td>
	 	<td id="crips"><label for="<?= $data->keterangan ?>"><?= $data->crips ?></label></td>
	 </tr>

	<?php endwhile; ?>
</table>