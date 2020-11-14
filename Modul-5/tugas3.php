<?php 
echo "Bilangan Prima 1-50 <br>";
for ($i=1; $i <= 50; $i++) { 
	$angka=0;
	for($j=1; $j <= $i; $j++){
		if($i % $j==0){
			$angka=$angka+1;
		}
	}
	if ($angka==2)
	echo "$i ";
}
?>