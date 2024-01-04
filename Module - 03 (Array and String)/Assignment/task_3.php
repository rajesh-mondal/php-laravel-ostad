<?php

function sortGrades( $grades ) {
    // Use rsort to sort the array in descending order
    rsort( $grades );

    print_r( $grades );
}

$grades = array( 85, 92, 78, 88, 95 );

sortGrades( $grades );