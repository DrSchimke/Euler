<?php
$max = 1000000;
$range = range(0, $max);
unset($range[0], $range[1]);

for ($i = 2; $i <= $max; ++$i) {
	if (!isset($range[$i])) continue;
	for ($j = 2*$i; $j <= $max; $j += $i) {
		unset($range[$j]);
	}
}

//print_r($range);
