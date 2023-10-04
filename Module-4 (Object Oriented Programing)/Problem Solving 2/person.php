<?php
/* Write a PHP class called 'Person' with properties like 'name' and 'age'. Implement the '__toString()' magic method to display person information. */
class Person {
    private $name;
    private $age;

    public function __construct( $name, $age ) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString() {
        return "Name: {$this->name}, Age: {$this->age}";
    }
}

// Example usage:
$person = new Person( "John Doe", 30 );
echo $person;