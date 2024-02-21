<?php

echo "Welcome to the world of Break and Continue Statements <br>";


for($num=1; $num<=10; $num++){
    echo $num;
    echo "<br>";
}
echo "<br>";
echo "<br>";

// continue statement is used when we want to skip any number in for loop...
for( $num1= 1; $num1<= 10; $num1++){
    if($num1==5){
        continue;
    }
    echo $num1;
    echo "<br>";
}
echo "<br>";
echo "<br>";

//break statement is used to stop the loop when condition is matched..
for($num2= 1; $num2<= 10; $num2++){
    if($num2==5){
        break;
    }
    echo $num2;
    echo "<br>";
}







?>