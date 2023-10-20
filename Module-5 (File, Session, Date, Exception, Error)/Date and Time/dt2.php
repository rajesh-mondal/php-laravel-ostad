<?php
/* Total time needded for calculating factorial */
$startTime = microtime( true );
factorial( 100 );
sleep( 3 );
$endTime = microtime( true );
$executionTime = $endTime - $startTime;
printf( "%10.8f", $executionTime );

function factorial( $n ) {
    $result = 1;
    for ( $i = 1; $i <= $n; $i++ ) {
        $result += $i;
    }
    return $result;
}