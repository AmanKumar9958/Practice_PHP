<?php

// function hello($name){
//     echo "Ram Ram ".$name;
// }
// hello("Aman");


function addition($num1, $num2){
    $result= $num1 + $num2;
    return $result;
}
$total = addition(2, 3);
echo "Addition: ".$total;
echo "<br>";
echo "<br>";


function subjects($maths, $hindi, $english){
    $total = $maths + $hindi + $english;
    return $total;
}
$totalMarks = subjects(80, 20, 100);
echo "Total Marks: ".$totalMarks;
?>