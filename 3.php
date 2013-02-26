<?php
function check($p)
{
	for($i = 2; $i * $i < $p; ++$i)
	{
		if ($p % $i == 0) return false;
	}
	return true;
}

for ($i = 3; $i < 600851475143 / 2; $i += 2) {
	if (600851475143 % $i == 0 && check($i)) echo "$i\n";
}
