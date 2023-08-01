<?php
 /* answer1
 Abstraction is a concept in object-oriented programming that 
 focuses on showing only the essential features of an object
  while hiding its implementation details. It allows you to 
  create a simplified model of an object that captures its
   core characteristics and behaviors without exposing the 
complexities.
Abstraction helps you represent real-world entities as classes and objects in your code. You can define the essential properties and behaviors of these entities without worrying about the inner workings of how they achieve those functionalities. This way, abstraction enables you to create reusable, modular, and easy-to-understand code by providing a clear separation between what an object does and how it does it.
*/
// Abstract class

abstract class Vehicle {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    abstract public function start();
    abstract public function stop();
}

// Subclass Car
class Car extends Vehicle {
    public function start() {
        return "Starting the car...";
    }

    public function stop() {
        return "Stopping the car...";
    }
}

// Subclass Motorcycle
class Motorcycle extends Vehicle {
    public function start() {
        return "Starting the motorcycle...";
    }

    public function stop() {
        return "Stopping the motorcycle...";
    }
}

// Create objects and demonstrate start and stop methods
$car = new Car("Toyota");
$motorcycle = new Motorcycle("Honda");

echo $car->start() . "\n";
echo $car->stop() . "\n";

echo $motorcycle->start() . "\n";
echo $motorcycle->stop() . "\n";


//answer2
namespace MyNamespace;

class MyClass {
    public function sayHello() {
        echo "Hello from MyClass in MyNamespace!";
    }
}

// Using the class from the namespace
$myObj = new MyNamespace\MyClass();
$myObj->sayHello();

?>