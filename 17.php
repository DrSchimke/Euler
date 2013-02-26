<?php
function word($nr)
{
	$numbers1 = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fivteen", "sixteen", "seventeen", "eighteen", "nineteen"];
	$numbers10 = ["", "", "twenty", "thirty", "forty", "fivty", "sixty", "seventy", "eighty", "ninety"];

	$res = "";

	if ($nr == 1000) {
		return "onethousand";
	}
	else if ($nr >= 100) {
		$res .= $numbers1[(int) ($nr/100)] . "hundred";
		$nr %= 100;
	}

	if ($res && $nr) $res .= "and";

	if ($nr > 19) {
		$res .= $numbers10[(int) ($nr/10)];
		$nr %= 10;
		$res .= $numbers1[$nr];
	}
	else {
		$res .= $numbers1[$nr];
	}

	return $res;
}

$sum = 0;
for ($i = 1; $i <= 1000; ++$i) $sum += strlen(word($i));

echo "$sum\n";
