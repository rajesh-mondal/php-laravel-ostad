<?php

$fname = "Issac";
$lname = "Newton";
$mname = "Sir";
printf( 'His Name is %2$s %1$s %3$s', $fname, $mname, $lname );
echo PHP_EOL;

printf( 'The binary equivalent %1$d is %1$b', 12, 12 );
echo "\n";

$n = 45.1267;
printf( "%.2f", $n );
echo PHP_EOL;

$m = 123; //0123
$n = 27; //0027
printf("%04d \n", $m);
printf("%04d \n", $n);

$planet1 = "Mercury";
$planet2 = "Jupiter";
// echo "The smallest planet is " . $planet1 . " and the biggest planet is " . $planet2 . "\n";
printf( "The smallest planet is %s and the biggest planet is %s\n", $planet1, $planet2 );