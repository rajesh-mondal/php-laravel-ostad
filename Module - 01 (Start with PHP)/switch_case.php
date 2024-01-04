<?php
$n = 12;
$r = $n % 2;

switch ( $r ) {
    case 0:
        echo "{$n} is a even number";
        break;
    default:
        echo "{$n} is an odd number";
}

echo PHP_EOL;

$color = 'red';
switch($color){
    /*
    case 'red':
        echo "Red is our favourite color";
        break;
    case 'green':
        echo "Green is our favourite color";
        break;
    */
    case 'red':
    case 'green':
        echo ucwords($color)." is our favourite color";
        break;
    case 'blue':
        echo "{$color} is not our favourite color";
        break;
    default:
        echo "This color is okay!";
}