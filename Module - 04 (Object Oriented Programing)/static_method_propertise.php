<?php
/* Static method and propertise of classes */
class MathCalculator {
    private $number;
    static $name;
    static function fibonacci( $n ) {
        // self::$name = 12;
        self::doSomething();
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething() {
        echo "Doing something\n";
    }

    function factorial( $n ) {
        self::doSomething();
        $this->doSomething();
        echo "Calculating factorial of {$n}\n";
    }
}

$mathc = new MathCalculator();
$mathc->fibonacci( 8 );

MathCalculator::fibonacci( 7 );