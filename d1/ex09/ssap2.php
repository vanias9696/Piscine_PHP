#!/usr/bin/php
<?php
	function ft_split($str)
	{
	$str = preg_replace("/\s+/", ' ', $str);
	$str = trim($str);
	$arr = explode(' ', $str);
	sort($arr);
	return $arr;
	}
	function main_funk($s)
	{
		if (($s >= "a" && $s <= "z") || ($s >= "A" && $s <= "Z"))
			$k = ord(strtolower($s));
		elseif ($s >= "0" && $s <= "9")
			$k = ord($s) * 10;
		else
			$k = ord($s) * 100;
		return ($k);
	}
	function func_cmp($s1, $s2)
	{
		$i = 0;
		while ($s1[$i] || $s2[$i])
		{
			$one = main_funk($s1[$i]);
			$two = main_funk($s2[$i]);
			if ($one < $two)
				return (-1);
			else if ($one > $two)
				return (1);
			$i+=1;
		}
		return (0);
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
	usort($arr, 'func_cmp');
	foreach ($arr as $el) {
		echo "$el\n";
	}
?>