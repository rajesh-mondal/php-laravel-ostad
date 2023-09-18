<?php

function factorial( $n ) {
    if ( gettype( $n ) != "integer" ) {
        return "Invalid";
    }

    $result = 1;

    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }

    return $result;
}

$x = "abc";

echo "Factorial of {$x} is " . factorial( $x );