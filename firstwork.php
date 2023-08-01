<?php
// answer no 1

// Functional Programming
function calculateSquare($num) {
    return $num * $num;
}

$resultFunctional = calculateSquare(5);

// Procedural Programming
$number = 5;

function calculateSquareProcedural($num) {
    return $num * $num;
}

$resultProcedural = calculateSquareProcedural($number);

// Object-Oriented Programming
class Calculator {
    private $num;

    public function __construct($num) {
        $this->num = $num;
    }

    public function calculateSquare() {
        return $this->num * $this->num;
    }
}

$calculator = new Calculator(5);
$resultOOP = $calculator->calculateSquare();

// Print results
echo "Functional Programming Result: $resultFunctional\n";
echo "Procedural Programming Result: $resultProcedural\n";
echo "Object-Oriented Programming Result: $resultOOP\n";


// answer number 3
class Fruit {
    private $name;
    private $color;

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }
}

// Instantiate the Fruit class with four different fruits
$fruit1 = new Fruit();
$fruit1->set_name("Apple");

$fruit2 = new Fruit();
$fruit2->set_name("Banana");

$fruit3 = new Fruit();
$fruit3->set_name("Orange");

$fruit4 = new Fruit();
$fruit4->set_name("Grapes");

// Get and print the names of the fruits
echo "Fruit 1: " . $fruit1->get_name() . "\n";
echo "Fruit 2: " . $fruit2->get_name() . "\n";
echo "Fruit 3: " . $fruit3->get_name() . "\n";
echo "Fruit 4: " . $fruit4->get_name() . "\n";




?>