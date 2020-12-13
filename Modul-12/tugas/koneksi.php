<?php 
$konek = mysqli_connect("localhost", "root", "", "datamahasiswa");
if (!$konek) {
	die("koneksi gagal : ".mysqli_connect_error());
}
 ?>