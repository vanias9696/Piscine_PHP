#!/usr/bin/php
<?php
function operat($s1, $s2, $op)
{
	if ($op == "+")
		$res = $s1 + $s2;
	elseif ($op == "-")
		$res = $s1 - $s2;
	elseif ($op == "/")
	{
		if ($s2 * 1 == "0")
			exit();
		$res = $s1 / $s2;
	}
	elseif ($op == "*")
		$res = $s1 * $s2;
	elseif ($op == "%")
	{
		if ($s2 * 1 == "0")
			exit();
		$res = $s1 % $s2;
	}
	else
		exit();
	echo "$res\n";
	exit();
}

if ($argc != 4)
{
	echo "The number of arguments was incorrectly enter!\n";
	exit();
}
$first = trim($argv[1]);
$second = trim($argv[3]);
$oper = trim($argv[2]);
operat($first, $second, $oper);
?>