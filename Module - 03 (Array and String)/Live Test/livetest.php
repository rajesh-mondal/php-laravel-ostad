<?php
/* Task 1 */
$student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];
echo "Age of the student: " . $student['age'] . "\n";

/* Task 2 */
$student = ['name' => 'Alice', 'age' => 22, 'grade' => 'A'];

if ( array_key_exists( 'grade', $student ) ) {
    echo "The grade key exists in the array. Value: " . $student['grade'];
} else {
    echo "The grade key does not exist in the array.";
}

echo PHP_EOL;

/* Task 3 */
$numbers = array( 100, 200, 50, 40, 50 );

foreach ( $numbers as $number ) {
    echo $number . "\n";
}

/* Task 4 */
$names = array( 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni' );

function filterByM( $name ) {
    return $name[0] == 'M';
}

$filteredNames = array_filter( $names, 'filterByM' );
print_r( $filteredNames );

/* Task 5 */
$originalString = 'Hello, World!';
$reversedString = strrev( $originalString );

echo $reversedString;