<?php
function check_prime($p)
{
	for ($i = 2; $i * $i <= $p; ++$i) {
		if ($p % $i == 0) return false;
	}
	return true;
}

function circular($a)
{
	$a .= "";
	$res = [];

	for ($i = 0, $l = strlen($a); $i < $l; ++$i) {
		$a = substr($a, 1) . $a[0];
		$res[] = $a;
	}

	return $res;
}

$primes = [];
for ($i = 2; $i < 1000000; ++$i) {
	$check = true;
	foreach (circular($i) as $j) {
		if (!check_prime($j)) {
			$check = false;
			break;
		}
	}
	if ($check) $primes[] = $i;
}

echo count(array_unique($primes));

