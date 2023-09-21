<?php
/*
* Task 1: Create a PHP script using a loop to print all even numbers between 1 and 10
*/

for ( $i = 2; $i <= 10; $i += 2 ) {
    echo $i . " \n";
}


/*
* Task 2: Declare a function named 'greet' that takes one parameter, 'name'. 
   The function should print a greeting message with the name passed to it when it is called.
*/

function greet($name) {
    echo "Hello, $name! How are you? \n";
}

greet("Rajesh"); 


/*
* Task 3: Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.
*/

function factorial( $n ) {
    if ( $n == 0 ) {
        return 1;
    }
    return $n * factorial( $n - 1 );
}

$number = 6;
$result = factorial( $number );

echo "Factorial of $number is $result \n";


/*
* Task 4: Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.
*/

function fibonacci($n) {
    $first = 0;
    $second = 1;

    echo "Fibonacci Series up to $n numbers: ";

    for ($i = 0; $i < $n; $i++) {
        echo $first . " ";
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

fibonacci(10);