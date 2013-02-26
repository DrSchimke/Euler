<?php

	$max = 2000000;

	$sieve = [];
	for ($i = 2; $i < $max; ++$i) $sieve [$i] = $i;

	for ($i = 2; $i < $max; ++$i) {
		if (!$sieve [$i]) continue;
		$p = $sieve [$i];

		for ($j = $i + $p; $j < $max; $j += $p) $sieve [$j] = 0;
	}

	echo array_sum($sieve) . "\n";

