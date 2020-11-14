<?php 
$dataacak = array("jaki","agam",
			"kaki", "cika",
			"manus", "lampard",
			"sikil", "fufu",
			"rigen", "boba");

$jlh = count($dataacak);
for ($i=0; $i < $jlh; $i++) { 
	for ($j=$i; $j < $jlh; $j++) { 
		if ($dataacak[$i] > $dataacak[$j]) {
			$keep=$dataacak[$j];
			$dataacak[$j]=$dataacak[$i];
			$dataacak[$i]=$keep;
		}
	}
}
echo "ASCENDING<br>";
foreach ($dataacak as $ascending) {
	echo "$ascending<br>";
}
echo "<br>DESCENDING<br>";
while ($jlh) {
	echo sprintf($dataacak[--$jlh]);
	echo "<br>";
}
?>