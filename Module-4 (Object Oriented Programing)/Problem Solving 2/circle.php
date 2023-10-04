<?php
/* Write a PHP class called 'Circle' that has a radius property. Implement methods to calculate the circle's area and circumference. */
class Circle {
    private $radius;

    public function __construct( $radius ) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function calculateCircumference() {
        return 2 * pi() * $this->radius;
    }
}

$circle = new Circle( 7 );

echo "Circle Area: " . $circle->calculateArea() . "\n";
echo "Circle Circumference: " . $circle->calculateCircumference() . "\n";