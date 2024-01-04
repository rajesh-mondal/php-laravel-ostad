<?php
//ternary operator

$n = 11;

if ( 12 == $n ) {
    echo "Tweleve";
} else if ( 10 == $n ) {
    echo "Ten";
} else {
    echo "A Number";
}

echo "\n";

//$numberInWord = ( 12 == $n ) ? "Twelve" : "A Number";
$numberInWord = ( 12 == $n ) ? "Twelve" : (  ( 10 == $n ) ? "Ten" : "A Number" );
echo $numberInWord;

echo "\n";

/* check even or odd number */
$result = ( $n % 2 ) ? "{$n} is an even Number" : "{$n} is a odd Number";
echo $result;
