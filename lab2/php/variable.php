<?php
//integer
$a = 10;
$b = 5;
$c = $a + $b;
echo '$a = ' . "$a" . "<br>";
// string concatenation : dot symbol (.)
// double quotes : display variable value
// single quotes : display variable name

//in general cases, double or single quotes are similar. but for some specical case (below example), we need to use single quote
echo "Hanoi is the capital of Vietnam <br>";
echo 'Hanoi is the capital of Vietnam <br>';
echo "Minh's laptop is Macbook Pro 13 inch <br>";

print 'Today is Wednesday <br>';
echo '$c = ' . "$c" . "<br>";
//in general, print and echo are similar but "print" is function while echo is not. about performance, echo runs faster

//double (float)
$gpa = 7.5;

//boolean (logic value : true or false only)
$pass = true;

//char (character)
$gender = 'm';  //male

//string (text)
$university = "University of Greenwich";

/*
NOTE: We don't need to declare data type in PHP.
PHP will automatically define the data type based on value
we assign to variable.
*/

?>
