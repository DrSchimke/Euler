<?php

/*
$exp = 1;
$sum = 0;
for ($i = 1; $i <= 17; ++$i) {
	$exp = bcmul($exp, 13);

	$a = bcpow(11, $exp);
	$b = bcpow(2, $exp);
	$c = bcsub($a, $b);
	$d = bcdiv($c, 9);
	$d = bcmod($d, "1000000000");
	$sum = bcadd($sum, $d);
	$sum = bcmod($sum, "1000000000");
	
	echo "$i $d\n";
}

echo "$sum\n";
*/

$exp = gmp_init(1);
$sum = gmp_init(0);
$ten = gmp_init("100000000000");
$nine = gmp_init("1000000000");
for ($i = 1; $i <= 17; ++$i) {
	$exp = gmp_mul($exp, 13);

	$a = gmp_powm(11, $exp, $ten);
	$b = gmp_powm(2, $exp, $nine);
	$c = gmp_sub($a, $b);
	$d = gmp_div($c, 9);
	$sum = gmp_add($sum, $d);

	echo gmp_strval($d) . "\n";
}
echo gmp_strval($sum) . "\n";

