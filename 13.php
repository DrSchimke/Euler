<?php

function my_sum($a, $b)
{
	$l = max(strlen($a), strlen($b));

	$a = str_pad($a, $l, 0, STR_PAD_LEFT);
	$b = str_pad($b, $l, 0, STR_PAD_LEFT);

	$sum = "";
	$uebertrag = 0;
	for ($i = $l - 1; $i >= 0; --$i) {
		$s = $a[$i] + $b[$i] + $uebertrag;
		$uebertrag = (int) ($s / 10);
		$sum = ($s % 10) . $sum;
	}
	if ($uebertrag) $sum = $uebertrag . $sum;

	return ltrim($sum, 0);
}

$fd = fopen("13.txt", "r");
$rows = [];
$sum = "0";
while ($row = fgets($fd)) {
	$row = trim($row);
	$sum = my_sum($sum, $row);
	echo "$sum\n";
}
