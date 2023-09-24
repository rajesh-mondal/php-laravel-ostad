<?php
/* Accessing characters within a string */
$string = "Hello World";
echo $string[0];
echo PHP_EOL;
echo $string[-6];
echo PHP_EOL;

echo substr( $string, 1, 4 );
echo PHP_EOL;
echo substr( $string, -3, 2 );
echo PHP_EOL;
echo substr( $string, -7, -4 );