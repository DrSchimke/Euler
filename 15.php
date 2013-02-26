<?php
	$a = gmp_div(gmp_fact(40), gmp_mul(gmp_fact(20), gmp_fact(20)));
	echo gmp_strval($a);
