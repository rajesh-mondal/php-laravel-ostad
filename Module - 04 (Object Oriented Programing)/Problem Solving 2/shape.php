<?php
/* Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method. */

use Rectangle as GlobalRectangle;

abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct( $base, $height ) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct( $width, $height ) {
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle( 5, 8 );
$rectangle = new GlobalRectangle( 4, 6 );

echo "Triangle Area: " . $triangle->calculateArea() . " square units\n";
echo "Rectangle Area: " . $rectangle->calculateArea() . " square units\n";