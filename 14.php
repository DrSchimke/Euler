<?php
function collaz($n)
{
	$cnt = 0;
	while (true) {
		++$cnt;
		if ($n == 1) break;
		if ($n % 2 == 0) {
			$n = (int) $n / 2;
		} else {
			$n = 3 * $n + 1;
		}
	}
	return $cnt;
}

$max = 0;
$tmp = 0;
for ($i = 1; $i < 1000000; ++$i) {
	$collaz = collaz($i);
	echo "$i $collaz\n";
	if ($collaz > $max) {
		$tmp = $i;
		$max = $collaz;
	}
}

echo "$tmp\n";

