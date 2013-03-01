<?php

function qsum($a)
{
	return array_sum(str_split($a));
}

$foo = [];
for ($i = 2; $i < 100; ++$i) {
	for ($j = 2; $j < 100; ++$j) {
		$a = gmp_strval(gmp_pow($i, $j));
		$qsum = qsum($a);
		if ($i == $qsum) $foo[] = $a;
	}
}

sort($foo);
print_r($foo);
