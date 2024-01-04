<?php
/* Task 1 */
class Person {
    public $name;
    public $age;

    // Constructor method to initialize name and
    public function __construct( $name, $age ) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to introduce the person
    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.\n";
    }
}

$person = new Person( "John", 30 );
$person->introduce();

/* Task 2: */
class Student extends Person {
    // Additional attribute for Student
    public $mark;

    // Constructor for student, which includes the mark
    public function __construct( $name, $age, $mark ) {
        parent::__construct( $name, $age ); // Call the parent class constructor
        $this->mark = $mark;
    }

    public function calculate_grade_percentage() {
        // Assume that the mark is out of 100
        $gradePercentage = ( $this->mark / 100 ) * 100;
        return "{$gradePercentage}%";
    }

    // Override the introduce method to include the student's name
    public function introduce() {
        echo "My name is {$this->name}, I am {$this->age} years old.\n";
    }
}

$student = new Student( "Alice", 18, "85" );
$student->introduce();
$gradePercentage = $student->calculate_grade_percentage();
echo "My grade percentage is {$gradePercentage}.\n";