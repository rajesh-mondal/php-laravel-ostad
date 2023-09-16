<?php
$result = 1;
$j = 1;
for ( $n = 1; $n <= 20; $n++ ) {
    $result *= $n;
    $j++;
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of operations. \n";