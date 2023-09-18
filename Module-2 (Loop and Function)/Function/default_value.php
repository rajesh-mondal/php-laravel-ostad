<?php
/* Default parameter of function or optional parameter */
function serve( $foodType, $numberOfItems = "1 cup" ) {
    echo "{$numberOfItems} of {$foodType} has been served";
}

$ft = "Coffee";
$n = "2 cups";

serve( $ft, $n );