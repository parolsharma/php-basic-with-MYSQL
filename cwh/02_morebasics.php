<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
*
{
    margin:0;
    padding:0;
    box-sizing:border-box;

}
.container 
{
    max-width:80%;
    background-color:rgb(214, 138, 138);
    margin:auto;
    padding:23px;

}
</style>
<body>
<div class="container">
<h1>
Lets learn about PHP
</h1>
<p>
    Your party status here:
</p>

<?php

$age=4;
if($age>18) {
    echo "You can go to the party";

}
else if($age==7) {
    echo "You are 7 years old";
}
 else {
     echo "You can not go to the party";
 }

 //array in php
$languages=array("Python", "C++", "Java", "PHP", "NodeJs");
//echo $languages[2];
echo count($languages);

//loops in php
$a = 0;
while ($a <= 10) {
    echo "<br>The value of a is: ";
    echo $a;
    $a++;
}

// Iterating array in php using while loop

$a = 0;
while ($a < count($languages)) {
    echo "<br>The value of languages is: ";
    echo $languages[$a];
    $a++;
}

// Iterating array in php using do while loop

$a = 20;
do  {
    echo "<br>The value of a is: ";
    echo $a;
    $a++;
} while ($a <=10);

//for loop
for ($i=0; $i <20; $i++) { 
  echo "<br>The value of i: ";
  echo $i;
}

//Foreach loop

foreach ($languages as $value) {
    echo $value;
}

//function

function print5() {
    echo "5";
}
print5();
print5();
print5();
print5();
print5();

function print_number($number) {
    echo "<br>Your number is: ";
    echo $number;
}
print_number(45);
print_number(435);


//strings

$str = "hfvdvd";
echo $str;
$len = strlen($str);
echo "The length of a string is: ". $len ." Thank you<br>";
echo "The reverse of a string is: ". strrev($str) ." Thank you<br>";
echo "The number of words in a string is: ". str_word_count($str) ." Thank you<br>";
echo "The search for vd in this string is: ". strpos($str, "vd") ." Thank you<br>";
echo "The replaced string is: ". str_replace("vd", "jj", $str) ." Thank you<br>";

?>
</div>
    
</body>
</html>