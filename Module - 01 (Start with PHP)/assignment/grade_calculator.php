<?php
/* Develop a PHP script named grade_calculator.php that computes the average of three test
scores and determines the corresponding letter grade. Declare 3 variable test scores
and calculate the average and display it along with the corresponding grade (A, B, C, D, F) */
$score1 = 89;
$score2 = 80;
$score3 = 79;

// calculate average score
$average = ( $score1 + $score2 + $score3 ) / 3;
echo "Average Score: $average\n";

// calculate letter grade
if ( $average > 90 ) {
    $grade = "A";
} else if ( $average >= 80 ) {
    $grade = "B";
} else if ( $average >= 70 ) {
    $grade = "C";
} else if ( $average >= 60 ) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Letter Grade: $grade";