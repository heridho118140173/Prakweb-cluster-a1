<?php
function perkalian ($angka1, $angka2)
{
	$hasil= $angka1*$angka2;
	return $hasil;
}

$hasil=perkalian(4,5);
echo "Perkalian 4 x 5 adalah $hasil";
echo "<br />";
echo "perkalian 7 x 2 adalah".perkalian(7,2);
?>