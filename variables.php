<?php

//local variable declared in a function only..
$marks1 = 200;       //Outside the function and can be accessed from anywhere..
function subject(){
    $marks = 100;    //Inside the function and cannot be accessed outside from this function..
    echo "Variable inside the function: $marks <br>";
}
subject();
echo "Variable outside the function is showing: $marks1 <br>";


//To use variable anywhere and created inside the function we use global keyword..


$hindi = 100;
$maths = 99;
$english = 88;
$science = 95;
function subjectMarks(){
    global $hindi;
    global $english, $maths, $science;

    echo "Global Hindi variable: $hindi <br>";
    echo "Global English variable: $english <br>";
}
echo "<b>Declared INSIDE the function</b> <br>";
subjectMarks()."<br>";
echo "<b>Declared OUTSIDE the function</b> <br>";
echo "Global Maths variable: $maths <br>";
echo "Global Science variable: $science <br>";
?>