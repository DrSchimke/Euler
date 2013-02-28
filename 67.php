<?php

$data = array();
foreach (explode("\n", file_get_contents("18.txt")) as $row) {
	$data [] = explode(" ", $row);
}

for ($i = 13; $i >= 0; --$i) {
	for ($j = 0; $j <= $i; ++$j) {
		$data[$i][$j] += max($data[$i+1][$j], $data[$i+1][$j+1]);
	}
}

echo $data[0][0] . "\n";
