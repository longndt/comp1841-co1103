<?php
$name = $_GET['name'];
$age = $_GET['age'];
$city = $_GET['city'];

echo "Hello " . $name .  "! <br>";
echo "You are " . $age . " years old now ! <br>";
echo "You are living in " . $city . " <br>";

//how to test this code ?
//URL: http://localhost/lab3/get1.php?name=long&age=36&city=hanoi
?>