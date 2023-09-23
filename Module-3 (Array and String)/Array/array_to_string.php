<?php
/* string to array, array to string & multiple delimeter */
// $vegetables = 'brinjal, brocolli, carrot, capsicam';
$vegetables = explode( ', ', 'brinjal, brocolli, carrot, capsicam, sweet-potato' );

/* for multiple delimeter */
$vegetables = preg_split( '/(, |,)/', 'brinjal, brocolli, carrot, capsicam, sweet-potato' );
print_r($vegetables);
// var_dump($vegetables);
echo $vegetables[1] . "\n";

/* array to string */
$vegetables_string = join( ', ', $vegetables );
echo $vegetables_string;