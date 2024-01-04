<?php
/* Working with Time in PHP, Microtime and Benchmarking */
echo time();
echo PHP_EOL;

// unix epoch //unix timestamp
$mt = microtime( true ); // for microseconds
printf( "%10.8f", $mt );
echo PHP_EOL;

// check current date
echo date( 'd/F/Y' );