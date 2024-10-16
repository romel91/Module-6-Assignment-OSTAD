<?php
function calculateResult($marks = [50, 60, 70, 80, 90]){

    // confirming five subject or less
    if (count($marks) !=5){
        echo "Please enter five subject marks. <br>";
        return;
    }

    // mark range validation
    foreach ($marks as $mark){
        if ($mark < 0 || $mark > 100){
            echo "mark range is invalid .<br>";
            return;
        }
    }

    // checking fail
    foreach ($marks as $mark){
        if ($mark < 33){
            echo "Grade: F<br>";
            return;
        }
    }

    // calculate total marks
    $total = 0;
    foreach ($marks as $mark){
        $total += $mark;
    }

    // calculate average of 5 subjects
    $average = $total / 5;
    
    // checking cases using switch case
    $grade = "";
    switch (true){
        case($average >= 80 && $average <= 100):
            $grade = "A+";
            break;
        case($average >= 70 && $average <= 79):
            $grade = "A";
            break;
        case($average >= 60 && $average <= 69):
            $grade = "A-";
            break;
        case($average >= 50 && $average <= 59):
            $grade = "B";
            break;
        case($average >= 40 && $average <= 49):
            $grade = "C";
            break;
        case($average >= 33 && $average <= 39):
            $grade ="D";
            break;
        default:
            $grade = "F";
            break;
    }

    // show the grade
    echo "Grade : $grade <br>";

    // if got F grade do not print total & average logic declare
    if ($grade != "F"){
        echo "Total Marks : $total <br>";
        echo "Average Marks : $average <br>";

}
}
// set new value for marks:
$marks = [38,81, 95, 82, 81];

calculateResult($marks);

