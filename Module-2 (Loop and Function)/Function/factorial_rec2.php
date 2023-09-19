<?php
/*
* find factorial of a number using recursion
*/

function factorial( $n ) {
    if ( $n == 0 ) {
        return 1;
    }
    return $n * factorial( $n - 1 );
}

echo factorial( 6 );