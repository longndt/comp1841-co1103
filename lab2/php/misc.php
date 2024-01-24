<?php
$a = 1;
$a = $a + 1;
$a += 1;

$x = 10;
//x++ : postfix
$y = $x++;  //y=x=10; x++=x+1=10+1=11
//++x : prefix
$z = ++$x;  //++x=x+1=11+1=12;  z=x=12
echo "x = $x <br>";   //12
echo "y = $y <br>";   //20 10
echo "z = $z <br>";   //12 1000 1010

$a = 100; //assignment
$a == $b; //comparison (value)
$a === $b; //comparison (value + data type)

?>