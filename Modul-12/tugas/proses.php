<?php 
include "koneksi.php";
switch ($_GET['action']) {
	case 'simpan':
		$nim=$_POST["nim"];
		$nama=$_POST["nama"];
		$prodi=$_POST["prodi"];
		$angkatan=$_POST["angkatan"];

		$sql="insert into mahasiswa (nim, nama, prodi, angkatan) values('$nim', '$nama', '$prodi', '$angkatan')";

		$hasil=mysqli_query($konek, $sql);
		break;
	
	case 'edit':
		$nim=$_POST["nim"];
		$nama=$_POST["nama"];
		$prodi=$_POST["prodi"];
		$angkatan=$_POST["angkatan"];

		$sql="update mahasiswa SET nama='$nama', prodi='$prodi', angkatan='$angkatan' where nim='$nim'";

		$hasil=mysqli_query($konek, $sql);
		break;

	case 'delete':
		$NIM=$_POST['NIM'];
		$sql="DELETE FROM mahasiswa WHERE NIM='$NIM'";

		$hasil=mysqli_query($konek, $sql);
		break;

}
?>