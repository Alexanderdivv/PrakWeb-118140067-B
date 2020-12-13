<PRE>
<table border="1" id="tampil_data">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>PRODI</th>
		<th>Angkatan</th>
		<th>Action</th>
	</tr>
	
<?php 
include "koneksi.php";
$hasil=mysqli_query($konek, "select * from mahasiswa order by nim asc");
$no=0;
while ($data=mysqli_fetch_array($hasil)) : $no++;
 ?>
 <tr>
 	<td><?php echo $no; ?></td>
 	<td><?php echo $data['NIM']; ?></td>
 	<td><?php echo $data['Nama']; ?></td>
 	<td><?php echo $data['Prodi']; ?></td>
 	<td><?php echo $data['Angkatan']; ?></td>
 	<td><button class="btn_edit" value="<?php echo $data['NIM']; ?>"> EDIT</button> | <button class="btn_hapus" value="<?php echo $data['NIM']; ?>">HAPUS </button></td>
 		
 </tr>
<?php endwhile; ?>
</table>
</PRE>