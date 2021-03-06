<?php



. // operator to concatenate strings

data types:
    int,
    float,
    object,
    array, $arr = array("ankush", "mukesh", "mohit");
    boolean, $var = false; $var1 = true;
    null,
    string;

Operators:
1. Arithmetic Operators
    Addition: $a + $b;
    Substraction: $a - $b;
    Division: $a / $b;
    Multiplication: $a * $b;
    Modulus: $a % $b;
    Exponential: $a ** $b;

2. Assignment Operators
    $a = $b;
    $a += $b: $a = $a + $b;
    $a -= $b: $a = $a - $b;
    $a /= $b: $a = $a / $b;
    $a *= $b: $a = $a * $b;
    $a %= $b: $a = $a % $b;

3. Comparision Operators
    $x == $y: if $x == $y then var_dump($x == $y) is TRUE else otherwise;
    $x < $y: if $x < $y then var_dump($x < $y) is TRUE else otherwise;
    $x > $y: if $x > $y then var_dump($x > $y) is TRUE else otherwise;
    $x >= $y: if $x >= $y then var_dump($x >= $y) is TRUE else otherwise;
    $x <= $y: if $x <= $y then var_dump($x <= $y) is TRUE else otherwise;
    $x <> $y: if $x <> $y then var_dump($x <> $y) is TRUE else otherwise;

4. Logical Operators
    $a && $b: if $a is TRUE && $b is False then var_dump($a && $b) is False;
    $a || $b: if $a is TRUE || $b is False then var_dump($a || $b) is TRUE;
    !$a: if $a is TRUE then var_dump(!$a) is False;

Conditional Statements:
    1. If-Else Statements
    2. If-Elseif Statements
    3. Switch Statements
        switch(age)
        {
            case 12:
                echo "You are 12 years old";
                break;
            case 45: 
                echo "You are 45 years old";
                break;
            default: 
                echo "Invalid age";
                break;
            }
4.While loop
    $i =0;
    while($i>5)
    {
        echo $i; echo "<br>";
        i++;
    }
5.For loop
    for(initilizatin; condition; updation){
        statement;
    }
6.Do while loop
    Do
    {
        echo $i;
        $i++;
    } while ($a <= 10);
7.Foreach loop
    foreach
    ($variable as $key => $value) {
        # code...
    }
    /*
    $arr = array("bananas", "apple");
    foreach($arr as $value) {
        echo "$value <br>";
    }
    */

echo is the only thing that is not 

strlen($var); // length of the given string
strrev($string); //reverse the string
substr_replace("before", "After", $string); // replace the string
str_repeat($string, number_of_repetition); // repeat the string n times
strpos($string , "string"); // gives the index of the "string" in $string

var_dump(); // tells the data type and value of the variable
count(); //function to count elements in array
ltrim("    this is a string    "); // will remove whitespaces from left
rtrim("    this is a string    "); // will remove whitespaces from right


?>