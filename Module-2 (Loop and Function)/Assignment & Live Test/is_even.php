<?php
/* print all even numbers using for loop */
function printEvenNumbersFor( $start, $end, $step ) {
    if ( $start % 2 !== 0 ) {
        $start++;
    }

    for ( $i = $start; $i <= $end; $i += $step ) {
        echo $i . " ";
    }
    echo "\n";
}

printEvenNumbersFor( 1, 20, 2 );

/* print all even numbers using while loop */
function printEvenNumbersWhile( $start, $end, $step ) {
    if ( $start % 2 !== 0 ) {
        $start++;
    }

    while ( $start <= $end ) {
        echo $start . " ";
        $start += $step;
    }
    echo "\n";
}

printEvenNumbersWhile( 1, 20, 2 );

/* print all even numbers using do-while loop */
function printEvenNumbersDoWhile( $start, $end, $step ) {
    if ( $start % 2 !== 0 ) {
        $start++;
    }

    do {
        echo $start . " ";
        $start += $step;
    } while ( $start <= $end );
}

printEvenNumbersDoWhile( 1, 20, 2 );

/*
 * Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. 
 * In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments 
   like start as 1, end as 20 and step as 2.You must call the function to print.
 * Also do the same using while loop and do-while loop also.
*/