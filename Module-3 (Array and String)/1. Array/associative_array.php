<?php

$foods = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam',
    'fruits'     => 'orange, banana, apple',
    'drinks'     => 'water, milk',
];

// $foods['drinks'] = $foods['drinks'] . ", orange juice";
$foods['drinks'] .= ", orange juice";

echo $foods['vegetables'] . "\n";

foreach ( $foods as $key => $value ) {
echo $key . " = " . $value . "\n";
}

/* Another way to print array keys and values */
$keys = array_keys( $foods );
print_r( $keys );

$values = array_values( $foods );
print_r( $values );