<?php
//send with GET  => receive with "GET"
//GET: unsecured (data was shown in URL)


//send with POST => receive with "POST"
//POST: secured (data was hidden in URL)

//receive by REQUEST for both of GET & POST

//use htmlspecialchars() to prevent security hole
//without protection
$age = $_POST['age'];
$gender = $_POST['gender'];

//with protection
$name = htmlspecialchars($_POST['name'],ENT_QUOTES, 'UTF-8');

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Gender: " . $gender . "<br>";
?>