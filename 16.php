<?php
$a = gmp_pow(2, 1000);
$s = gmp_strval($a);

$sum = 0;
for ($i = 0; $i < strlen($s); ++$i) $sum += $s[$i];

echo "$sum\n";
