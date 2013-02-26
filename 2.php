<?php

$fib = array();
$fib[1] = 1;
$fib[2] = 1;

$sum = 0;

for ($i = 3; ; ++$i) {
	$fib[$i] = $fib[$i - 2] + $fib[$i - 1];

	if ($fib[$i] >= 4000000) break;

	if ($fib[$i] % 2 == 0) $sum += $fib[$i];
}
echo $sum . "\n";

