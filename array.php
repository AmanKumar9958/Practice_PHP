<?php
// ---------------------------------------------------Indexed Array-----------------------------------------------------
$myarray = array("aman", "gopal", "om", "kartik");
// echo $myarray[3]."<br>";
// print_r($myarray);

// for($i=0; $i<=3; $i++){
//     echo $myarray[$i];
//     echo "<br>";
// }


// ---------------------------------------------------Associative Arary----------------------------------------
$bill = array('Cake' => 30, 'Coke' => 80, 'Biscuits' => 50, 'Choclates' => 60);

                                                    // Cake = Key
                                                    // 30 = Value 

$bill["Cake"] = 200;        //To change the value of the key.

// print_r ($bill);            //To print an array.

// var_dump($bill);            //This will print with its datatype.

// echo $bill["Cake"]."<br>";
// echo $bill["Coke"]."<br>";

echo "<br>";

//----------------------------------------------------Foreach loop----------------------------------------------

//In foreach loop we have one main array in which we have array and then another array in which we store our array...

$myNewArray = ["Parrot", "Dog", "Fish", "Lion", "Tree"];            //For Indexed Array
// print_r($myNewArray);
// echo $myNewArray[0];

// foreach ($myNewArray as $names){
//     echo $names."<br>";
// }

$myNewAssoArray = ["Birds" => "Parrot", "Dogs" => "Labrador", "Fish" => "Clown", "Tree" => "Mango"];
// print_r ($myNewAssoArray);

// echo "<ul>";
// foreach($myNewAssoArray as $fav => $specific){      //Using HTML List tag....
//     echo "<li>$fav = $specific.</li>";
// }
// echo "</ul>";


foreach($myNewAssoArray as $fav => $specific){
    echo $fav. " = ".$specific."<br>";
}
?>