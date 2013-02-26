<?php
$prim = 2;
for ($i = 1; $i < 10001; ++$i) {
	$prim = gmp_nextprime($prim);
}
echo gmp_strval($prim);
