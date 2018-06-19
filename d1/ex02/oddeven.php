#!/usr/bin/php
<?php
	while (1) {
		echo "Enter a number: ";
		$str = trim(fgets(STDIN));
		if (feof(STDIN) == TRUE)
		{
			echo "\n";
			exit();
		}
		elseif (!is_numeric($str))
			echo "'$str' is not a number\n";
		else
		{
			if ($str % 2 != 0)
				echo "The number $str is odd\n";
			else
				echo "The number $str is even\n";
		}
	}
?>