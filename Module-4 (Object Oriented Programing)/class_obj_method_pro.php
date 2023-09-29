<?php
/* Class, object, method, property */
class Human {
    public $name;
    function sayHi() {
        echo "Salam\n";
        $this->sayName(); // Call the sayName method of the same class
    }

    function sayName() {
        echo "My name is {$this->name}\n";
    }
}

class Cat {
    function sayHi() {
        echo "Meow\n";
    }
}

class Dog {
    function sayHi() {
        echo "Woof\n";
    }
}

// Create instances of the Human, Cat, and Dog classes
$h1 = new Human();
$h2 = new Human();
$h1->name = "Rajesh"; // set operation
$h2->name = "Raju"; // set operation
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
// $h1->sayName();
// echo $h1->name; // get operation
// $c1->sayHi();

$h2->sayHi();
// $h2->sayName();
// echo $h2->name; // get operation