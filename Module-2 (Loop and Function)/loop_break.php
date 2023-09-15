<?php
for ( $i = 20; $i < 50; $i++ ) {
    if ( $i % 13 == 0 ) {
        echo $i;
        echo PHP_EOL;
        break;
    }
}

echo "======\n";

// continue
for ( $i = 20; $i < 30; $i++ ) {
    if ( $i < 27 ) {
        continue;
    }
    echo $i;
    echo PHP_EOL;
}