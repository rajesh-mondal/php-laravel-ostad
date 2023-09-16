<?php
/* Print the Sum of Even Numbers from 1 to 50 */
$sum = 0;

for ( $i = 2; $i <= 50; $i += 2 ) {
    $sum += $i; 
}

echo "The sum of even numbers from 1 to 50 is: " . $sum;