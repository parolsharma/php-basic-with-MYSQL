<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first PHP website
    <?php 
    define('PI', 3.14);
    echo "Hello World ";

    $variable1=5;
    $variable2=2;
    // echo  $variable1;
    eCho $variable1 + $variable2;
    echo "<br>";
    
    //Airthmatic operator
    echo "The value of variable1 + variable2 is ";
    echo $variable1 + $variable2;

    echo "<br>";
    
    echo "The value of variable1 - variable2 is ";
    echo $variable1 - $variable2;

    echo "<br>";
    
    echo "The value of variable1 * variable2 is ";
    echo $variable1 * $variable2;

    echo "<br>";
    
    echo "The value of variable1 / variable2 is ";
    echo $variable1 / $variable2;

    echo "<br>";


     //Assignment operator


     $newvar = $variable1;
     $newvar +=1;
     echo "The value of new variable is ";
     echo $newvar;
     echo "<br>";
     //Comparison operator
     echo "The value of 1==4 is ";
     echo var_dump(1==4);
     echo "<br>";
    
     echo "The value of 1==4 is ";
     echo var_dump(1!=4);
     echo "<br>";

     echo "The value of 1==4 is ";
     echo var_dump(1>=4);
     echo "<br>";

     echo "The value of 1==4 is ";
     echo var_dump(1<=4);
     echo "<br>";

     //Increment/Decrement operator
     
     echo $variable1++;
     echo"<br>";
     echo $variable1;
    //  echo $variable1--;
    //  echo ++$variable1;
    //  echo --$variable1;

     //Logical operator
    // And (&&)
    // Not (!)
    // Xor ()
    // Or (||)
    //$myVar= (true or false);
     $myVar= (true or true);
    //$myVar= (true and false);
    echo "<br>";
    //$myVar= (false and true);
    //echo "<br>";
    //$myVar= (false and false);
    echo "<br>";
    echo var_dump($myVar);

    

   
    $var="This is a string";
    echo var_dump($var);

    $var=77;
    echo var_dump($var);
    
    $var=97.1;
    echo var_dump($var);
 
    echo "Data Types<br>";


    $var= true;
    echo var_dump($var);
    echo PI;
    ?> 