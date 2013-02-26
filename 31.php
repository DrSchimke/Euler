<?php
function coin_sum($coins, $limit)
{
	$count = 0;
	while ($coin = array_shift($coins)) {
		for ($value = $coin; $value <= $limit; $value += $coin) {

			if ($limit == $value) {
				++$count;
			}

			$count += coin_sum($coins, $limit - $value);
		}
	}
	return $count;
}

echo coin_sum(array(200, 100, 50, 20, 10, 5, 2, 1), 200);

