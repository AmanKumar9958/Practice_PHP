<?php

$name = "My name is Aman Kumar";
echo $name;
echo "<br>";

                                                //String Length\\

echo strlen($name);
echo "<br>";
echo "My name". " is Aman". " Kumar.";    //'.' is used to join the two string.
echo "<br>";
echo "Length of "."$name is- ".strlen($name);
echo "<br>";

                                                //WORD COUNT\\
echo str_word_count($name);
echo "<br>";
echo "The word count of $name is ".str_word_count($name);
echo "<br>";

                                                //String Reverse\\
echo strrev($name);
echo "<br>";
echo "The reverse of $name is- ".strrev($name);
echo "<br>";

                                                //Position of any String\\

echo strpos($name, "Kumar");        //It will give you indexing.
echo "<br>";
                                                //Replace any word in the string\\
echo str_replace("Aman", "Gopal", $name);
echo "<br>";

                                                //String repeat\\
echo str_repeat($name, 5);
echo "<br>";

                                                //Extra Space remove\\
echo "<pre>";
echo rtrim("    My name is Aman Kumar   ");     //Removes the extra space from RIGHT SIDE of the string.
echo "<br>";
echo ltrim("    My name is Aman Kumar   ");      //Removes the extra space from LEFT SIDE of the string.
echo "<br>";
echo "</pre>";
                                                //Sting Split\\

$split = str_split($name);  //It convert the any given string into the array, with their indexing..
$split = str_split($name, 2);   //2 use karne se hm 2-2 ki indexing le skte hai..
print_r($split);        //What is print_r in php?

echo "<br>";
                                                //Adding new string after some letters\\

$chuk = chunk_split($name, 1, "-"); //kisi bhi ek string, agr hme kuchh new string add karne ho after some letters so we can use this.
echo $chuk;
echo "<br>";
$chunk = chunk_split($name, 2, "/");    //We can also use any HTML tag instead of "/"
echo $chunk;
echo "<br>";
                                                //String Uppercase and Lowercase\\
//strtolower    //strtoupper    //ucfirst   //ucwords   //lcfirst

$name = "My name is Aman Kumar";

$newName = strtolower($name);   //All character to lowercase
print_r($newName);
echo "<br>";

$againNewName = strtoupper($name);  //All character to uppercase
echo $againNewName;
echo "<br>";

$myName = ucfirst($name);
print_r($myName);   //First letter of the sting become capital
echo "<br>";

$myNewNameAgain = lcfirst($name);   //First letter of the string become small
echo $myNewNameAgain;
echo "<br>";

$hello = ucwords($name);    //First letter of each word will be capital
echo $hello;
echo "<br>";

$newString = "Hello world. This world is very nice. I like this world.";
echo substr_count($newString, "world"); //This will return the number of "world" in this sting.
echo "<br>";
echo substr_count($newString, "world", 13); //This take the input from WHERE TO START.
echo "<br>";
echo substr_count($newString, "world",13, 22);  //It will start counting from 13 and count till 22.
echo "<br>";


                                                    //String find position\\
//strpos    //strrpos   //stripos   //strripos
$str1 = "I love html, I love HTML and CSS too!";
echo "You can find HTML from ". "by using strpos-> ".strpos($str1, "HTML")."<br>";  //strpos is CASE-SENSITIVE

echo "You can find HTML Starting from 10-> ". "by using strpos-> " .strpos($str1, "HTML", 10). "<br>";  //Searching will start from 10th index

echo "You can find HTML from  "."by using stripos-> ". stripos($str1, "HTML")."<br>";    //stripos is CASE-INSENSITIVE

echo "You can find HTML Starting from 10-> ". "by using strpos-> " .stripos($str1, "HTML", 10). "<br>";     //Searching will start from 10th index
echo "<br>";
                                                    //Sub String\\
$b = "My name is Aman Kumar.";
$sub_b = substr($b, 3);     //Prints the remaining string after 3 character including space.
echo $sub_b."<br>";
echo substr($b, 3, 6). "<br>";     //Prints the remaining character given with starting and ending point.

                                                    //String Replace\\
// str_replace --> Case Sensitive          str_ireplace --> Case insensitive
$c = "I love PHP and I love PHP too! <br>";
echo $c;
$rep_C = str_replace ("PHP", "HTML", $c);       //CASE - SENSITIVE
$rep_inc = str_ireplace ("php", "HTML", $c);       //CASE - INSENSITIVE
$rep_2c = str_replace("PHP", "__", $c);      //CASE - SENSITIVE
$rep_2c = str_ireplace("PHP", "__", $c);     //CASE - INSENSITIVE
echo $rep_C;
echo $rep_2c;
            //Now we will replace two word same time....
$find = ["PHP", "I"];
$replace = ["HTML", "Aman"];
echo str_replace($find, $replace, $c);

$color = ["Red", "Green", "Yellow", "Blue", "Yellow(2)", "Red(2)"];
$color_find = ["Red", "Yellow"];
$color_replace = ["Purple", "Skyblue"];

echo "<pre>";
print_r($color);
print_r (str_replace($color_find, $color_replace, $color));
echo "</pre>";
?>