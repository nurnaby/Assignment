<?php
// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.

$studentGrades = array(
    "student1" => array(
        "Math" => 90,
        "English" => 85,
        "Science" => 78
    ),
    "student2" => array(
        "Math" => 88,
        "English" => 92,
        "Science" => 95
    ),
    "student3" => array(
        "Math" => 75,
        "English" => 80,
        "Science" => 88
    )
);

    function calculateAverageGrads($grades){
        foreach ($grades as $student=> $grade){
            
            $totalMark    = array_sum($grade);
            $countSubject = count($grade);
            $averageGrade = $totalMark / $countSubject;
        echo "Average grade for $student: ".round($averageGrade,2)." \n";

        }

    }

    calculateAverageGrads($studentGrades);

?>