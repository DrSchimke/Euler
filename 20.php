<?php
$factorial = gmp_fact(100);
$str = gmp_strval($factorial);
$sum = 0;
for ($i = 0; $i < strlen($str); ++$i) $sum += $str[$i];

echo "$sum\n";
