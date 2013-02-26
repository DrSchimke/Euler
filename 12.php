<?php

function divisors($a)
{
	$nr = 2;
	for ($i = 2; $i * $i <= $a; ++$i) {
		if ($a % $i == 0) $nr += 2;
	}

	if (($i-1)*($i-1) == $a) --$nr;

	return $nr;
}

$sum = 0;
for ($i = 1; ; ++$i) {
	$sum += $i;
	$div = divisors($sum);
	echo "$i $sum: $div\n";
	if (divisors($sum) > 500) break;
}

