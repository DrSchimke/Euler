<?php
function checkPrime($p)
{
	for ($i = 2; $i * $i <= $p; ++$i) {
		if ($p % $i == 0) return false;
	}
	return true;
}

$sum = 0;
for ($i = 2; ; ++$i) {
	if (!checkPrime($i)) continue;
	if ($sum + $i >= 1000) break;

	$sum += $i;
	if (checkPrime($sum)) echo "$sum\n";
}

