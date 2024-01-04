<?php

$temperature = 20;

// display weather information based on temperature range
if ( $temperature < 0 ) {
    echo "It's freezing!";
} elseif ( $temperature >= 0 && $temperature < 15 ) {
    echo "It's cool.";
} elseif ( $temperature >= 15 ) {
    echo "It's warm.";
}