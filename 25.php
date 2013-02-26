<?php

$fib = array();
$fib[1] = 1;
$fib[2] = 1;

for ($i = 3; ; ++$i) {
	$fib[$i] = gmp_add($fib[$i - 2], $fib[$i - 1]);
	$str = gmp_strval($fib[$i]);
	$len = strlen($str);

	if ($len == 1000) {
		echo ($i) . "\n";
		break;
	}
}

