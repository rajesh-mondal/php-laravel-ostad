<?php
/* Print the Sum of Numbers from 1 to 50 */
$sum = 0;

for ( $i = 0; $i <= 50; $i++ ) {
    $sum += $i;
}

echo "The sum of odd numbers from 1 to 50 is: " . $sum;