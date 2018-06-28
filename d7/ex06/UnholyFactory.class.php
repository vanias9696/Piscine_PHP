<?php

class UnholyFactory
{
	private $fighter = [];
	function absorb($who)
	{
		if (!$who instanceof Fighter)
		{
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
			return ;
		}
		foreach ($this->fighter as $key => $obj) {
			foreach ($obj as $key1 => $name) {
				if ($who->name == $name)
				{
					print('(Factory already absorbed a fighter of type ' . $who->name . ")" . PHP_EOL);
					return ;
				}
			}
		}
		$this->fighter[] = $who;
		print("(Factory absorbed a fighter of type " . $who->name . ")" . PHP_EOL);
	}

	function fabricate($name)
	{
		foreach ($this->fighter as $key => $obj) {
			foreach ($obj as $key1 => $who) {
				if ($who == $name)
				{
					print("(Factory fabricates a fighter of type " . $name . ')' . PHP_EOL);
					return ($obj);
				}
			}
		}
		print("(Factory hasn't absorbed any fighter of type " . $name . ')' . PHP_EOL);
		return (null);
	}
}
?>