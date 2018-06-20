<?php
	function ft_is_sort($arr)
	{
		$i = 0;
		$s = $arr;
		sort($s);
		$n = count($arr);
		while ($i < $n)
		{
			if ($s[$i] != $arr[$i])
				return (FALSE) ;
			$i++;
		}
		return (TRUE) ;
	}
?>