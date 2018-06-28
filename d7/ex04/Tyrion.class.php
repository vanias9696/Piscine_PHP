<?php

class Tyrion
{
	function sleepWith($who)
	{
		if ($who instanceof Sansa)
			print("Let's do this." . PHP_EOL);
		else if ($who instanceof Jaime or $who instanceof Cersei)
			print("Not even if I'm drunk !" . PHP_EOL);
	}
}

?>