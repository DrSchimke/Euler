<?php
function check($nr, $pow)
{
	$sum = 0;
	$nr = $nr."";
	for ($i = 0, $l = strlen($nr); $i < $l; ++$i) {
		$sum += pow($nr[$i], $pow);
		if ($sum > $nr) break;
	}
	return $sum == $nr;
}
$sum = 0;
for ($i = 10; $i < 1000000; ++$i) {
	if (check($i, 5)) {
		$sum += $i;
		echo "$i $sum\n";
	}
}

