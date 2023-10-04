<?php
/* Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to calculate the rectangle's area and perimeter. */
class Rectangle {
    // Properties
    private $length;
    private $width;

    // Constructor
    public function __construct( $length, $width ) {
        $this->length = $length;
        $this->width = $width;
    }

    // Method to calculate the area
    public function calculateArea() {
        return $this->length * $this->width;
    }

    // Method to calculate the perimeter
    public function calculatePerimeter() {
        return 2 * ( $this->length + $this->width );
    }
}

// Create a Rectangle object
$rectangle = new Rectangle( 12, 9 );

// Calculate and display the area and perimeter
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "\n";