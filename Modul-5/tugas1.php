<pre>Kalkulator
<form method="POST">
 <input type="text" name="bil1">
 <input type="text" name="bil2">
 <input type="submit" name="submit" value="hitung">

</form>

<?php 
if (isset($_POST['submit'])) {
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];
	echo "Bilangan 1 : $bil1<br>";
	echo "Bilangan 2 : $bil2<br>";
echo "
Berikut merupakan hasil dari setiap operasi<br>";
$hasil = $bil1 + $bil2;
echo "
PENJUMLAHAN
Operator : +
Hasil : $hasil<br>";
$hasil = $bil1 - $bil2;
echo "
PENGURANGAN
Operator : -
Hasil : $hasil<br>";
$hasil = $bil1 * $bil2;
echo "
PERKALIAN
Operator : *
Hasil : $hasil<br>";
$hasil = $bil1 / $bil2;
echo "
PEMBAGIAN
Operator : /
Hasil : $hasil<br>";
$hasil = $bil1 % $bil2;
echo "
MODULUS
Operator : %
Hasil : $hasil";
}
?>

</pre>