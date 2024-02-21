<!-- PHP dataTypes are-
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null -->

<?php
echo "DataTypes";
echo "<br>";

$name = "Aman Kumar";
$rollno = '06621102023';

echo "My name is $name and my roll no. is $rollno";
echo "<br>";
echo var_dump($rollno);         //It is used to know the datatype of the variable.

$float = 23.8;
echo var_dump($float);
echo "<br>";

$friends = array("Chirag", "Sumit", "Varun", "Vivek", "Ayush");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo $friends[4];
echo "<br>";
?>