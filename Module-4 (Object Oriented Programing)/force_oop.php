<?php
/* How to write better code with oop by forcing */
class Shape{

}

class Shapes {
    private $shapes;
    function __construct() {
        $this->shapes = array();
    }

    function addShape( Shape $shape ) {
        array_push( $this->shapes, $shape );
    }

    function totalShapes() {
        return count( $this->shapes );
    }
}

class Rectangle extends Shape {

}

class Triangle extends Shape {

}

class Student {

}

$shapesCollection = new Shapes();
$shapesCollection->addShape( new Rectangle() );
$shapesCollection->addShape( new Triangle() );
$shapesCollection->addShape( new Student() );

echo $shapesCollection->totalShapes();