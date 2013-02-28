<?php

function foo($nr, $qsum, $max)
{
	if ($qsum == $max) {
		return $nr;
	}

	$sum = 0;
	for ($i = 1; $i <= 9; ++$i) {
		if ($qsum + $i > $max) break;
		$sum += foo($nr.$i, $qsum+$i, $max);
	}
	return $sum;
}

$sum = 0;
for ($i = 1; $i < 30; ++$i) {
	$sum += foo("", 0, $i);
//	echo "$i " . foo("", 0, $i) . "\n";
	echo "$sum\n";
}

return;
$sum = gmp_init(0);
for ($i = 1; $i <= 17; ++$i) {
	$a = gmp_pow(11, 13*$i);
	$b = gmp_pow(2, 13*$i);
	$c = gmp_sub($a, $b);
	$d = gmp_div($c, 9);
	$sum = gmp_add($sum, $d);
	echo gmp_strval($d) . "\n";
}

$sum = gmp_strval($sum);
echo "$sum\n";
echo substr($sum, -9) . "\n";
