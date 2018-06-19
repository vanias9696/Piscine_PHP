#!/usr/bin/php
<?php
{
	function ft_split($str)
	{
	$str = preg_replace("/\s+/", ' ', $str);
	$str = trim($str);
	$arr = explode(' ', $str);
	sort($arr);
	return $arr;
	}

	if ($argc == 1)
		return ;
	$i = 0;
	$arr = array();
	while ($i + 1 < $argc) {
		$temp = ft_split($argv[$i + 1]);
		$arr = array_merge($arr, $temp);
		$i++;
	}
	sort($arr);
	foreach ($arr as $el) {
		echo "$el\n";
	}
}
?>