<?php
function ft_split($str)
{
	$str = preg_replace("/\s+/", ' ', $str);
	$str = trim($str);
	$arr = explode(' ', $str);
	sort($arr);
	return $arr;
}
?>