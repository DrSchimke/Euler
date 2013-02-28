<?php
$data = file_get_contents("11.txt");
$data = explode("\n", $data);
foreach ($data as $idx => $row) {
	if (!$row) {
		unset($data[$idx]);
		continue;
	}
	$data[$idx] = explode(" ", $row);
}

function check1($i, $j) {
	global $data;

	if ($j > 16) return 0;

	return $data[$i][$j] * $data[$i][$j+1] * $data[$i][$j+2] * $data[$i][$j+3];
}

function check2($i, $j) {
	global $data;

	if ($i > 16) return 0;

	return $data[$i][$j] * $data[$i+1][$j] * $data[$i+2][$j] * $data[$i+3][$j];
}

function check3($i, $j) {
	global $data;

	if ($i > 16 || $j > 16) return 0;

	return $data[$i][$j] * $data[$i+1][$j+1] * $data[$i+2][$j+2] * $data[$i+3][$j+3];
}

function check4($i, $j) {
	global $data;

	if ($i > 16 || $j < 4) return 0;

	return $data[$i][$j] * $data[$i+1][$j-1] * $data[$i+2][$j-2] * $data[$i+3][$j-3];
}

$max = 0;
for ($i = 0; $i < 20; ++$i) {
	for ($j = 0; $j < 20; ++$j) {
		$max = max($max, check1($i, $j), check2($i, $j), check3($i, $j), check4($i, $j));
	}
}
echo $max . "\n";
