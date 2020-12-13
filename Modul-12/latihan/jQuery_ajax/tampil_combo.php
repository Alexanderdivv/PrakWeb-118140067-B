<table border='1'>
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jurusan</th>
	</tr>
	<?php 
		include "koneksi.php";
		if (isset($_POST['id_jur'])) {
			$id_jur = $_POST['id_jur'];
		}else{
			$id_jur='';
		}

		$hasil=mysqli_query($konek, "select * from mahasiswa where id_jur='".$id_jur."'order by nrp asc");
		$no=0;
		while ($data = mysqli_fetch_array($hasil)) : $no++;
	 ?>
	 <tr>
	 	<td><?php echo $no; ?></td>
	 	<td><?php echo $data['nrp']; ?></td>
	 	<td><?php echo $data['nama']; ?></td>
	 	<td><?php echo $data['alamat']; ?></td>
	 	<td><?php echo $data['id_jur']; ?></td>	
	 </tr>
	<?php endwhile; ?>
	
</table>