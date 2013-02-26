<?php
function periode($m) {
	for ($n = 1; $n < 10000; ++$n) {
		$r = gmp_strval(gmp_mod(gmp_pow(10, $n), $m));
		if ($r == 1) return $n;
	}

	return 0;
}

$max = 0;
for ($i = 1; $i < 1000; ++$i) {
	$p = periode($i);
	echo "$i $p\n";
	$max = max($max, $p);
}

echo $max . "\n";
