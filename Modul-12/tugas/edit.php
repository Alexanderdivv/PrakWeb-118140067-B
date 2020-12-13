<?php 
	include "koneksi.php";
	$NIM=$_GET['NIM'];
	$query = mysqli_query($konek, "select * from mahasiswa where NIM = '$NIM'");
	$data = mysqli_fetch_array($query);
 ?>
<pre>
<form method="post" id="formEdit">
<label>NIM :</label>
<input type="text" name="nim" id="nim" value="<?php echo $data['NIM']; ?>">
<label>Nama :</label>
<input type="text" name="nama" id="nama" value="<?php echo $data['Nama']; ?>">
<label>Prodi :</label>
<input type="text" name="prodi" id="prodi" value="<?php echo $data['Prodi']; ?>">
<label>Angkatan :</label>
<input type="text" name="angkatan" id="angkatan" value="<?php echo $data['Angkatan']; ?>">
	
	<button type="submit" name="submit" id="submit_edit">submit EDIT</button>
</form>
</pre>