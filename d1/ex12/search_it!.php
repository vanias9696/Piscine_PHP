#!/usr/bin/php
<?php
	if ($argc < 3)
		exit();
	$find = $argv[1];
	$i = 2;
	while ($argv[$i])
	{
		$str = trim($argv[$i]);
		$arr = explode(":", $str);
		if (count($arr) != 2)
			exit();
		if ($arr[0] == $find)
			$res = $arr[1] . "\n";
		$i++;
	}
	if ($res)
		echo "$res";
?>