<?php

echo "Welcome to the world of Goto Statement..<br>";

//goto statement is when we want to jump from one code to another code..

for($aman = 1; $aman<=10; $aman++){
    echo "Aman Kumar --> ". $aman;
    echo "<br>";
    if($aman==4){
        goto statement;
    }
}
//label is created by using colon....
statement: echo "My name is Aman Kumar";



?>