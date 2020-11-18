<pre>
<form method="POST">
 Nama  : <input type="text" name="nama">
 Warna : <input type="text" name="warna">
 <input type="submit" name="cek" value="cek">

</form>

<?php 
function hargabat($namas, $warnas="red"){
$pjg = strlen($namas);
	if($pjg <= 10) {
		$harga = $pjg * 300;
		}elseif($pjg <= 20) {
		$harga = $pjg * 500;
		}elseif($pjg > 20) {
		$harga = $pjg * 700;
		}
echo "<font color = $warnas>Nama : $namas <br>
Harga : Rp.$harga
</font>";
}

if (isset($_POST['cek'])) {
	$nama = $_POST['nama'];
	$warna = $_POST['warna'];
	if (empty($warna)) {
	hargabat($nama);
	}else{
	hargabat($nama,$warna);
	}

}
?>

</pre>