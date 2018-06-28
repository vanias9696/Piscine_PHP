<?php

class NightsWatch implements iFighter
{
	private $fighter = array();

	function recruit($name)
	{
		if ($name instanceof iFighter)
			$this->fighter[] = $name;
	}

	function fight()
	{
		foreach ($this->fighter as $one) {
			$one->fight();
		}
	}
}

?>