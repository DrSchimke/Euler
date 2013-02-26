<?php
$primes = [2];
$primes2 = [];

$p = 2;
for ($i = 0; $i < 5000000; ++$i) {
	$p = gmp_nextprime($p);
	if ($i < 20000) $primes [] = (int) gmp_strval($p);
	$primes2 [gmp_strval($p)] = true;
}
echo ".\n";
function check($a, $b)
{
	global $primes2;

	return isset($primes2[$a.$b]) && isset($primes2[$b.$a]);
}

$min = 999999999;

for ($a = 0; $a < 1000; ++$a) {
	$A = $primes[$a];

	for ($b = $a + 1; $b < 1000; ++$b) {
		$B = $primes[$b];
		if (!check($A, $B)) continue;

		for ($c = $b + 1; $c < 2000; ++$c) {
			$C = $primes[$c];
			if (!check($A, $C) || !check($B, $C)) continue;
			
			for ($d = $c + 1; $d < 20000; ++$d) {
				$D = $primes[$d];
				if (!check($A, $D) || !check($B, $D) || !check($C, $D)) continue;

				for ($e = $d + 1; $e < 20000; ++$e) {
					$E = $primes[$e];
					if (!check($A, $E) || !check($B, $E) || !check($C, $E) || !check($D, $E)) continue;

					echo "$A $B $C $D $E\n";

					$min = min($min, $A + $B + $C + $D + $E);
				}
			}
		}
	}
}

echo $min . "\n";
