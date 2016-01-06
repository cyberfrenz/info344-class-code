blah
<?php
echo "Hello World\n"; 

$name = 'Antony';
$fullName = $name . 'Zhong';

class Person {
	protected $name;
	
	public function __construct($n) {
		return $this->name = $n;
		
	}
}

function foo() {
	echo "Foo Fighters\n";
}


echo "Hello {$name}s\n";
FOO(); 
?>
more blah
