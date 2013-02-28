<?php
function divisorsum($a)
{
	$sum = 0;
	for ($i = 1; $i <= $a / 2; ++$i) {
		if ($a % $i == 0) $sum += $i;
	}
	return $sum;
}

$sum = 0;
for ($i = 1; $i < 10000; ++$i) {
	$a = divisorsum($i);
	if ($a == $i) continue;
	if ($i == divisorsum($a)) $sum += $i;
	echo "$i\n";
}
echo "$sum\n";
