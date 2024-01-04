<?php
$filename = "C:/xampp/htdocs/Ostad/Module-5/File/data/f1.txt";
if ( is_readable( $filename ) ) {
    $fp = fopen( $filename, 'r' );
    $line = fgets( $fp );
    // echo $line;

    while ( $line = fgets( $fp ) ) {
        echo $line;
    }
    // rewind( $fp ); // start from first position again
    fseek( $fp, 5 );
    while ( $line = fgets( $fp ) ) {
        echo $line . "-";
    }

    fclose( $fp );

    $data = file( $filename );
    echo $data[2];
    print_r( $data );
    echo PHP_EOL;

    $data = file_get_contents( $filename );
    echo $data;
}