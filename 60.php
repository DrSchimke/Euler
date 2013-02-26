<?php
$primes = [2];

$p = 2;
for ($i = 0; $i < 30000; ++$i) {
	$p = gmp_nextprime($p);
	$primes [] = (int) gmp_strval($p);
}

function check($a, $b)
{
	$prob1 = gmp_prob_prime($a.$b);
	$prob2 = gmp_prob_prime($b.$a);

	return $prob1 != 0 && $prob2 != 0;
}

$min = 999999999;
for ($a = 0; $a < count($primes); ++$a) {
	$A = $primes[$a];
	for ($b = $a + 1; $b < count($primes); ++$b) {
		$B = $primes[$b];
		if (!check($A, $B)) continue;

		for ($c = $b + 1; $c < count($primes); ++$c) {
			$C = $primes[$c];
			if (!check($A, $C) || !check($B, $C)) continue;
			
			for ($d = $c + 1; $d < count($primes); ++$d) {
				$D = $primes[$d];
				if (!check($A, $D) || !check($B, $D) || !check($C, $D)) continue;

				echo "$A $B $C $D\n";

				for ($e = $d + 1; $e < count($primes); ++$e) {
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
