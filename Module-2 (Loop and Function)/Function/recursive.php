<?php
/* recursive function */
function printNumber( $counter, $end, $stepping = 2 ) {
    if ( $counter > $end ) {
        return;
    }
    echo $counter . "\n";
    $counter += $stepping;
    printNumber( $counter, $end, $stepping );
}

printNumber(21, 37);