<?php
function addTwoNumbers( $x, $y, $z = 5 ) {
    echo $x + $y + $z;
}
addTwoNumbers( 2, 3 );

/* parameter data type hinting */
// strict mode enable
declare(strict_types = 1);
// data type hinting
function mySelf( int|string $name, int $age ) {
    echo "My name is $name and my age is $age \n";
}

mySelf( "Rajesh", 27 );

/* paras type null */
function myName(?string $text){
    echo $text;
}

myName(null);

/* Variadic functions */
function sum(...$numbers){
    echo array_sum($numbers) . PHP_EOL;
}

sum(1,2,3,4,5,6,7,8,9);

/* Raw Anonymous function */
(function(){
    $x = 10;
    $y = 20;
    echo $x + $y . "\n";
})();

/* Anonymous function assign */
$jack = function(){
    $x = 10;
    $y = 20;
    echo $x + $y . "\n";
};

jack();

/* Arrow function */
$add = fn($x, $y)=>$x+$y;
echo $add(10, 40);

/* Function returns */
function avg($x, $y):?int{
    $result = ($x + $y) / 2;
    return $result;
}

echo avg(12, 13);