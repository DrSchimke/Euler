<?php
$names = file_get_contents("22.txt");
$names = str_replace('"', "", $names);
$names = explode(",", $names);
sort($names);

function score($name)
{
	$score = 0;
	for ($i = 0, $l = strlen($name); $i < $l; ++$i) {
		$score += ord($name[$i]) - 64;
	}
	return $score;
}

$sum = 0;
foreach ($names as $idx => $name) {
	$sum += ($idx + 1) * score($name);
}
echo "$sum\n";
