<?php
// Function to calculate and display average grades for students
function calculateAverageGrade( $studentGrades ) {
    foreach ( $studentGrades as $student => $grades ) {
        $totalGrades = array_sum( $grades );

        // Calculate average grade
        $averageGrade = $totalGrades / count( $grades );

        // Determine letter grade
        $letterGrade = getLetterGrade( $averageGrade );

        echo "Average Grade of {$student}: $letterGrade\n";
    }
}

// Function to determine letter grade based on average grade
function getLetterGrade( $averageGrade ) {
    if ( $averageGrade >= 90 ) {
        return 'A';
    } elseif ( $averageGrade >= 80 ) {
        return 'B';
    } elseif ( $averageGrade >= 70 ) {
        return 'C';
    } elseif ( $averageGrade >= 60 ) {
        return 'D';
    } else {
        return 'F';
    }
}

// Define student grades
$studentGrades = array(
    'Student1' => array( 'Math' => 85, 'English' => 92, 'Science' => 78 ),
    'Student2' => array( 'Math' => 88, 'English' => 95, 'Science' => 90 ),
    'Student3' => array( 'Math' => 75, 'English' => 86, 'Science' => 82 ),
);

// Calculate and display average grades
calculateAverageGrade( $studentGrades );