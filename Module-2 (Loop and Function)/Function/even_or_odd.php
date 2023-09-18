<?php
/* 
* Determine the argument even or odd 
*/
function isEven( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;
}

$x = 12;

if(isEven($x)){
    echo "{$x} is an even number";
} else{
    echo "{$x} is an odd number";
}