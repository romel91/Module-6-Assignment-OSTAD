<?php
function calculateResult($marks){

    // confirming five subject or less
    if (count($marks) !=5){
        echo "Please enter five subject marks. \n";
        return;
    }

    // mark range validation
    foreach ($marks as $mark){
        if ($mark < 0 || $mark > 100){
            echo "mark range is invalid .\n";
            return;
        }
    }

    // checking fail
    foreach ($marks as $mark){
        if ($mark < 33){
            echo "The student has failed. \n";
            return;
        }
    }

    // calculate total marks
    $total = 0;
    foreach ($marks as $mark){
        $total += $mark;
    }
    // echo "Total Marks : $total \n";

    // calculate averager of 5 subjects
    $average = $total / 5;
    // echo "Average Marks : $average \n";
    

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
    echo "Grade : $grade \n";

    // if got F grade do not print total & average logic declare
    if ($grade != "F"){
        echo "Total Marks : $total \n";
        echo "Average Marks : $average \n";

}
}

$marks = [45, 76, 82, 38, 60];

calculateResult($marks);

