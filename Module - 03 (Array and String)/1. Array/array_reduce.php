<?php
/* array reduce - array utility fdunction */
$numbers = array( 1, 2, 3, 4, 5, 6 );

function sum( $oldValue, $newValue ) {
    return $oldValue + $newValue;
}

$sum = array_reduce( $numbers, 'sum' );
echo $sum . "\n";

/* sumations of even number */
function sumEven( $oldValue, $newValue ) {
    if ( $newValue % 2 == 0 ) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum = array_reduce( $numbers, 'sumEven' );
echo $sum;
