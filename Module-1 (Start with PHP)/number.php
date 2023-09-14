<?php

$number1 = 10;
$number2 = 5;

$add = $number1 + $number2;
$sub = $number1 - $number2;
$mul = $number1 * $number2;
$div = $number1 / $number2;
$mod = $number1 % $number2;

echo "Addition is {$add} \n";
echo "Substraction is {$sub} \n";
echo "Multiplication is {$mul} \n";
echo "Division is {$div} \n";
echo "Modulas is {$mod} \n";

// decimal, octal, hexadecimal number
$n = 12;
$o = 017;
$h = 0x2B;

printf( "The Number is %d, %d and %d\n", $n, $o, $h );

printf( "The binary equivalent of %d is %b \n", 1212, 1212 );
printf( "The hexamdecimal equivalent of %d is %x \n", 1212, 1212 );
printf( "The octal equivalent of %d is %o \n", 27, 27 );