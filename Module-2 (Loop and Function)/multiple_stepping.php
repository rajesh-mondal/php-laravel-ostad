<?php
for ( $i = 10; $i > 0; $i-- ) {
    echo $i . ":" . ( 10 - $i );
    echo PHP_EOL;
}

// another way
for ( $i = 10, $j = 1; $i > 0; $i--, $j++ ) {
    echo $i . ":" . $j;
    echo PHP_EOL;
}