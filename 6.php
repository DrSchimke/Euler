<?php
$sum_square = 0;
$sum = 0;
for ($i = 1; $i <= 100; ++$i) {
	$sum_square += $i * $i;
	$sum += $i;
}

$square_sum = $sum * $sum;
$diff = $square_sum - $sum_square;
echo "$sum_square $square_sum $diff\n";
