<?php
function generatePassword( $length ) {
    // Define character sets for each category
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $numericChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Initialize the password with one random character from each category
    $password = $uppercaseChars[rand( 0, 25 )] .
                $lowercaseChars[rand( 0, 25 )] .
                $numericChars[rand( 0, 9 )] .
                $specialChars[rand( 0, 11 )];

    // Calculate the remaining length of the password
    $remainingLength = $length - 4;

    // Combine all character sets into one
    $allChars = $uppercaseChars . $lowercaseChars . $numericChars . $specialChars;

    // Fill the remaining length with random characters
    for ( $i = 0; $i < $remainingLength; $i++ ) {
        $randomChar = $allChars[rand( 0, strlen( $allChars ) - 1 )];
        $password .= $randomChar;
    }

    // Shuffle the password to randomize the order of characters
    $password = str_shuffle( $password );
    
    return $password;
}

$password = generatePassword( 12 );

echo "Generated Password: $password";