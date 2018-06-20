#!/usr/bin/php
<?php
function operat($s1, $s2, $op)
{
	if ($op == "+")
		return $s1 + $s2;
	elseif ($op == "-")
		return $s1 - $s2;
	elseif ($op == "/")
	{
		if ($s2 == "0" || $s2 == "-0")
		{
			echo "Syntax Error\n";
			exit();
		}
		return $s1 / $s2;
	}
	elseif ($op == "*")
		return $s1 * $s2;
	elseif ($op == "%")
	{
		if ($s2 == "0" || $s2 == "-0")
		{
			echo "Syntax Error\n";
			exit();
		}
		return $s1 % $s2;
	}
}

function f_separation($str)
{
	$arr = array();
	$str = preg_replace("/\s+/", ' ', $str);
	$str = trim($str);

	$i = 0;
	if ($str[$i] == '-')
		$i++;
	while ($str[$i] <= "9" && $str[$i] >= "0"){
		$i++;
	}
	if (($str[0] == '-' && $i == 1) || ($str[0] != '-') && $i == 0)
	{
		echo "Syntax Error\n";
		exit();
	}
	$arr[0] = substr($str, 0, $i);
	if ($str[$i] == ' ')
		$i++;
	if ($str[$i] != "+" && $str[$i] != "-" && $str[$i] != "/" && $str[$i] != "%" && $str[$i] != "*")
	{
		echo "Syntax Error\n";
		exit();
	}
	$arr[1] = $str[$i];
	$i++;
	if ($str[$i] == ' ')
		$i++;
	$k = $i;
	if ($str[$i] == '-')
		$i++;
	while ($str[$i] <= "9" && $str[$i] >= "0"){
		$i++;
	}
	if (($str[$k] == '-' && $i == $k + 1) || ($str[$k] != '-') && $i == $k)
	{
		echo "Syntax Error\n";
		exit();
	}
	$arr[2] = substr($str, $k, $i);
	if ($str[$i])
	{
		echo "Syntax Error\n";
		exit();
	}
	return $arr;

}
if ($argc != 2)
{
	echo "Syntax Error\n";
	exit();
}
$arr = f_separation($argv[1]);
$k = operat($arr[0] * 1, $arr[2] * 1, $arr[1]);
echo"$k\n";
?>