#!/usr/bin/php
<?php
	if ($argc != 2)
		return ;
	$str = preg_replace("/\s+/", ' ', $argv[1]);
	$str = trim($str);
	print_r($str);
	echo "\n";
?>