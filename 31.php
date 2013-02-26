<?php
$coins = array(200, 100, 50, 20, 10, 5, 2, 1);

function test($coins, $limit, $noCoin, $already)
{
	$count = 0;
	foreach ($coins as $coin) {
		if (in_array($coin, $noCoin)) continue;
		$noCoin[] = $coin;
		for ($value = $coin, $i = 1; $value <= $limit; $value += $coin, ++$i) {
			if ($limit == $value) {
				echo "$already + $i x $coin\n";
				++$count;
			}

			if ($limit > $value) {
				$count += test($coins, $limit - $value, $noCoin, "$already + $i x $coin");
			}
		}
	}
	return $count;
}

echo test($coins, 200, array(), "") . "\n";

