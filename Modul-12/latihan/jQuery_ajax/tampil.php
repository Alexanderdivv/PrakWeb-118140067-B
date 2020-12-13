<table border='1'>
	<tr>
		<th>No</th>
		<th>NRP</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jurusan</th>
	</tr>
	<?php 
	include "koneksi.php";	
	$hasil=mysqli_query($konek, "select * from mahasiswa order by nrp asc");
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