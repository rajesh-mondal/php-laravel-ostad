<?php
// fibonacci series
$veryold = 0;
$old = 1;
$new = 1;

for ( $i = 0; $i < 10; $i++ ) {
    echo $veryold . " ";
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}

/* 
initial
veryold = 0
old = 1
new = 1

1st loop
veryold = 1 
old = 1
new = 1

2nd loop
veryold = 1
old = 1
new = 2

3rd loop
veryold = 2
old = 2
new = 3

4th loop
veryold = 3
old = 3
new = 5
*/