<?php

function recursiveCountdown( $n ) {
    if ( $n == 0 ) {
        return;
    }
    echo $n . "\n";
    recursiveCountdown( $n - 1 );
}

recursiveCountdown( 6 );