<?php
$filename = "C://xampp//htdocs//Ostad//Module-5//File//data//f2.txt";
file_put_contents( $filename, "Mars\n", FILE_APPEND | LOCK_EX );
file_put_contents( $filename, "Jupiter\n", FILE_APPEND | LOCK_EX );