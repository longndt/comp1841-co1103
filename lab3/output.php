<?php
//send with GET  => receive with "GET"
//GET: unsecured (data was shown in URL)


//send with POST => receive with "POST"
//POST: secured (data was hidden in URL)

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Gender: " . $gender . "<br>";
?>