<?php
/* check even or odd number */
$n = 12;
if ( $n % 2 == 0 ) {
    echo "$n is an even number \n";
} else {
    echo "$n is an odd number \n";
}

/* check teenager or not */
$name = "Rajesh";
$age = 12;

if ( $age >= 13 && $age <= 19 ) {
    echo "{$name} is a teenager \n";
} else {
    echo "{$name} is not a teenager \n";
}

/* check food has vitamin D or not */
$food = "apple";

if ( "tuna" == $food || "salmon" == $food ) {
    echo "{$food} has vitamin D";
} else {
    echo "We don't know if {$food} contains vitamin D";
}
