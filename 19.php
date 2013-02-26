<?php

function days($jahr, $monat)
{
	$days = [null, 31, null, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
	if ($days[$monat]) return $days[$monat];

	if ($jahr % 4 == 0) {
		if ($jahr % 100 == 0) {
			if ($jahr % 400 == 0) {
				return 29;
			} else {
				return 28;
			}
		} else {
			return 29;
		}
	} else {
		return 28;
	}

	if ($jahr % 4 == 0 && $jahr % 400 == 0) return 29;
	return 28;
}

$count = 0;

for($i = 0, $d = 0; ; ++$i) {
	$jahr = 1900 + (int) ($i/12);
	$monat = $i % 12 + 1;
	$tage = days($jahr, $monat);

	if ($jahr > 2000) break;

	echo "$jahr $monat $d $tage\n";

	if ($jahr > 1900 && $d == 6) ++$count;

	$d += $tage;
	$d %= 7;
}

echo $count . "\n";
