<?php

echo "Welcome the world of For Each Loop <br>";

$fruits = array("banana", "apple", "mango", "guava", "grapes", "orange");

foreach($fruits as $value){
    echo "$value <br>";
}
//In foreach loop we have one main array in which we have array and then another array in which we store our array...

$myNewArray = ["Parrot", "Dog", "Fish", "Lion", "Tree"];            //For Indexed Array
// print_r($myNewArray);
echo $myNewArray[0];

foreach ($myNewArray as $names){
    echo $names."<br>";
}

$myNewAssoArray = ["Birds" => "Parrot", "Dogs" => "Labrador", "Fish" => "Clown", "Tree" => "Mango"];
// print_r ($myNewAssoArray);

echo "<ul>";
// foreach($myNewAssoArray as $fav => $specific){      //Using HTML List tag....
//     echo "<li>$fav = $specific.</li>";
// }
// echo "</ul>";


foreach($myNewAssoArray as $fav => $specific){
    echo $fav. " = ".$specific."<br>";
}



?>