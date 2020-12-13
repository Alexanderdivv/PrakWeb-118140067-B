<?php 
include "koneksi.php";

$nrp=$_POST["nrp"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$id_jur=$_POST["id_jur"];

$sql="insert into mahasiswa (nrp, nama, alamat, id_jur) values('$nrp', '$nama', '$alamat', '$id_jur')";

$hasil=mysqli_query($konek, $sql);
 ?>