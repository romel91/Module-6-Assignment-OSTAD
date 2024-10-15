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

    // failed subject check
    foreach ($marks as $mark){
        if ($mark < 33){
            echo "The student has failed. \n";
            return;
        }
    }
    
}

