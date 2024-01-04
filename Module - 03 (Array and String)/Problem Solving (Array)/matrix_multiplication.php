<?php
/* Write a PHP script that performs matrix multiplication for two given multidimensional arrays and outputs the result. */
function matrixMultiply( $matrix1, $matrix2 ) {
    $result = [];
    foreach ( $matrix1 as $i => $row ) {
        foreach ( $matrix2[0] as $j => $col ) {
            $result[$i][$j] = 0;
            foreach ( $row as $k => $val ) {
                $result[$i][$j] += $val * $matrix2[$k][$j];
            }
        }
    }
    return $result;
}

$matrix1 = [[1, 2], [3, 4]];
$matrix2 = [[5, 6], [7, 8]];

$resltMatrix = matrixMultiply( $matrix1, $matrix2 );
print_r( $resltMatrix );