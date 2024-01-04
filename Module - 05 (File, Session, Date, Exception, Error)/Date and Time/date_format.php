<?php
/* Working with different date formats in PHP */
date_default_timezone_set( "Asia/Dhaka" ); // Local timezone

echo date( 'd/m/y' ); // 19/10/23
echo PHP_EOL;

echo date( 'd/M/Y' ); // 19/Oct/2023
echo PHP_EOL;

echo date( 'dS M, Y' ); // 19th Oct, 2023
echo PHP_EOL;

echo date( 'dS F, Y' ); // 19th October, 2023
echo PHP_EOL;

echo date( 'dS F, Y h:i:s' ); // 19th October, 2023 08:14:30 // GMT time
echo PHP_EOL;

// for am/pm, A for capital AM - a for small am/pm
echo date( 'dS F, Y h:i:s A' ); // 19th October, 2023 08:16:33 PM // GMT time
echo PHP_EOL;
echo date( 'dS F, Y h:i:s A', time() + 24 * 60 * 60 ); // 20th October, 2023 08:16:33 PM
echo PHP_EOL;

echo date( 'z' ) . "\n";
echo date( 't' );
echo PHP_EOL;