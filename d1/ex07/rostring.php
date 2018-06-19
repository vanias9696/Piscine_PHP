#!/usr/bin/php
<?php
	if ($argc == 1)
		return ;
	$str = $argv[1];
	$str = trim($str);
	$str = preg_replace("/\s{2,}/", " ", $str);
	$arr = explode(" ", $str);
	$last = array_shift($arr);
	foreach ($arr as $s) {
		echo "$s ";
	}
	print_r($last);
	echo "\n";
?>