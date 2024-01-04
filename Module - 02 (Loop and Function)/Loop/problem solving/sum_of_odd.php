<?php
/* Print the Sum of Odd Numbers from 1 to 50 */
$sum = 0;

for ( $i = 1; $i <= 50; $i += 2 ) {
    $sum += $i; 
}

echo "The sum of odd numbers from 1 to 50 is: " . $sum;