<<<<<<< HEAD
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
=======
Hey this is some content above the code
<?php
$name = 'Dave';
$fullName = $name . 'Stearns';

class Person {
    protected $name;
    
    public function __construct($n) {
        $this->name = $n;
    }
    
    public function getName() {
        return $this->name;
    }
}

function foo($bar) {
    echo "Hey this is the foo fighting function\n";
}

echo "Hello {$name}s\n";
foo(NULL);
?>
And this is some content below
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
