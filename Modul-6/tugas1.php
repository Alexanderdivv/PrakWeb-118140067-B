<form method="POST">
	<input type="text" name="angka">
	<input type="submit" name="submit" value="Hitung">
</form>

<?php 
function faktorin($angka){
	return $angka == 0 ? 1 : $angka * faktorin($angka-1);
}

if (isset($_POST['submit'])) {
	$angka = $_POST['angka'];
	$angka = faktorin($angka);
	echo "Hasil : $angka";
}
?>