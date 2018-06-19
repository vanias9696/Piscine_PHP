#!/usr/bin/php
<?php
{
	$i = 1;
	while ($i < $argc) {
		print_r($argv[$i]);
		echo "\n";
		$i++;
	}
}
?>