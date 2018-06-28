<?php

class Example
{
	public $publicFoo = 0;			//змінна буде відома не тільки в класі
	private $_privateFoo = 'hello';		//тільки в класі

	function __construct()
	{
		print('Constructor called' . PHP_EOL);

		print('$this->publicFoo: ' . $publicFoo . PHP_EOL);
		$publicFoo = 42;
		print('$this->publicFoo: ' . $this->publicFoo . PHP_EOL);

		print('$this->_privateFoo: ' . $this->_privateFoo . PHP_EOL);
		$this->_privateFoo = 'world';
		print('$this->_privateFoo: ' . $this->_privateFoo . PHP_EOL);

		$this->publicBar();
		$this->_privateBar();
		//print('$this->foo: ' . $this->foo . PHP_EOL);
		// $this->foo = 42;
		// print('$this->foo: ' . $this->foo . PHP_EOL);
		// $this->bar();
		return;
	}
	function __destruct()
	{
		print('Destructor called' . PHP_EOL);
		return;
	}
	function publicBar(){
		print('Method publicBar called') . PHP_EOL;
		return;
	}
	private function _privateBar(){
		print('Method _privateBar called') . PHP_EOL;
		return;
	}
}

$instance = new Example();

print('$instance->publicFoo: ' . $instance->publicFoo . PHP_EOL);
$instance->publicFoo = 100;
print('$instance->publicFoo: ' . $instance->publicFoo . PHP_EOL);

$instance->publicBar();










// $foo = 56;
// print($foo);
// print('$instance->foo: ' . $instance->foo . PHP_EOL);
// $instance->foo = 42;
// print('$instance->foo: ' . $instance->foo . PHP_EOL);

// $instance->bar();
?>