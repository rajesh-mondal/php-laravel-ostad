<?php

for ( $i = 0; $i <= 10; $i++ ) {
    echo $i;
    echo PHP_EOL;
}

//printing odd number
for ( $i = 1; $i < 20; $i += 2 ) {
    echo $i;
    echo PHP_EOL;
}

//printing star
for ( $i = 1; $i < 10; $i++ ) {
    echo PHP_EOL;
    for ( $j = 0; $j < $i; $j++ ) {
        echo "*";
    }
}
echo PHP_EOL;

// while loop
$i = 0;
while ( $i < 10 ) {
    $i++;
    echo $i . PHP_EOL;
}
echo PHP_EOL;

// do while loop
$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while ( $i < 10 );

// go to 
echo "** go to **\n";
$i = 0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;