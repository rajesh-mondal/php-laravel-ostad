<?php
/* callback function */

function add( $x1, $x2 ) {
    echo "Adding $x1 and $x2";
}

function divide( $x1, $x2 ) {
    echo "Dividing $x1 and $x2";
}

function process( $n1, $n2, $cb ) { // cb for callback
    if ( is_callable( $cb ) ) {
        $cb( $n1, $n2 );
    } else {
        echo "Sorry, $cb is not callable";
    }
}

process( 10, 20, "add" );