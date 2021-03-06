<?php
    function SumMarks($MarksArr)
    {
        $sum = 0;
        foreach ($MarksArr as $value) {
            $sum += $value;
        }
        return $value;
    }

    $RohanMarks = [34, 45, 67];
    echo "The sum of marks of Rohan out of 300: ". SumMarks($RohanMarks). "<br>";
    $HarryMarks = [90, 98, 99];
    echo "The sum of marks of Harry out of 300: ". SumMarks($HarryMarks);
?>