<?php

function check($a, $b)
{
	$a1 = (int) ($a / 10);
	$a2 = $a % 10;
	$b1 = (int) ($b / 10);
	$b2 = $b % 10;

	if ($a1 == $b2 && $a2 / $b1 == $a / $b) return [$a2, $b1];

	if ($a2 == $b1 && $a1 / $b2 == $a / $b) return [$a1, $b2];

	return false;
}

$zaehler = 1;
$nenner = 1;
for ($a = 11; $a < 100; ++$a) {
	for ($b = $a + 1; $b < 100; ++$b) {
		if ($a % 10 == 0 || $b % 10 == 0) continue;
		if ($fraction = check($a, $b)) {
			$zaehler *= $fraction[0];
			$nenner *= $fraction[1];
		}
	}
}

echo "$zaehler, $nenner\n";
