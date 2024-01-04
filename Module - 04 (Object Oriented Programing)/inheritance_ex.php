<?php
class Shape {
    protected $name;
    protected $area;

    // Constructor to initialize the name and calculate the area
    public function __construct( $name ) {
        $this->name = $name;
        $this->calculateArea(); // Calculate the area when a shape is created
    }

    // Method to get and display the area of the shape
    public function getArea() {
        echo "This {$this->name}'s area is {$this->area}\n";
    }

    public function calculateArea() {

    }
}

class Triangle extends Shape {
    private $a, $b, $c;

    // Constructor to initialize the sides of the triangle and call the parent constructor
    public function __construct( $a, $b, $c ) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct( "Triangle" );
    }

    // Override the calculateArea method to calculate the area of the triangle
    public function calculateArea() {
        $perimeter = ( $this->a + $this->b + $this->c ) / 2;
        $this->area = sqrt( $perimeter * ( $perimeter - $this->a ) * ( $perimeter - $this->b ) * ( $perimeter - $this->c ) );
    }
}

class Rectangle extends Shape {
    private $a, $b;
    // Constructor to initialize the sides of the rectangle and call the parent constructor
    public function __construct( $a, $b ) {
        $this->a = $a;
        $this->b = $b;
        parent::__construct( "Rectangle" );
    }

    // Override the calculateArea method to calculate the area of the rectangle
    public function calculateArea() {
        $this->area = $this->a * $this->b;
    }
}

// Create a Rectangle instance and demonstrate method calls
$rec = new Rectangle( 2, 4 );
$rec->getArea();

// Create a Triangle instance and demonstrate method calls
$t = new Triangle( 10, 12, 8 );
$t->getArea();