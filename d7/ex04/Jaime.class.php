<?php

	class Jaime
	{
		function sleepWith($who)
		{
			if ($who instanceof Sansa)
				print("Let's do this." . PHP_EOL);
			else if ($who instanceof Cersei)
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			else if ($who instanceof Tyrion)
				print("Not even if I'm drunk !" . PHP_EOL);
		}

	}
?>