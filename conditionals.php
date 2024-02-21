<?php
//Age calculator for driving..
$age = 18;

if ($age ==18){
    echo "You can drive, but you should wait for one more year"."<br>";
}
elseif($age<13){
    echo "You are a kid now"."<br>";
}
elseif($age >=13 and $age<18){
    echo "You are a teenager, you can't drive"."<br>";
}
elseif($age <= 60){
    echo "You can drive"."<br>";
}
elseif($age >60){
    echo "You can drive, but be care ful while driving"."<br>";
}
else{
    echo "---"."<br>";
}



// Voting guess..
$age = 18;

if ($age<18){
    echo "You can't give vote"."<br>";
}
else if ($age==18){
    echo "You should apply for Voter ID Card"."<br>";
}
else if ($age>18){
    echo "If you have Voter ID card then you can give vote";
}
?>