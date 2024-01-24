<?php

//IF ELSE
$grade = 85;
// echo $grade . "<br";
echo "Grade: $grade <br>";

if ($grade >= 70 && $grade <=100) {
  echo "Result: Distinction <br>";
  echo "Congratulation. You are excellent ! <br>";
}
else if ($grade >=60 && $grade <70)
  echo "Result: Merit <br>";
else if ($grade >= 40 && $grade <60)
   echo "Result: Pass <br>";
else if ($grade >= 0&& $grade <40)
   echo "Result: Fail <br>";
else
   echo "Result: Invalid<br>";

//SWITCH CASE
$speed = 8;
switch ($speed) {
   case 0:
      echo "Fan is stopped <br>";
      break;
   case 1:
      echo "Fan speed is 1 <br>";
      break;
   case 2:
      echo "Fan speed is 2  <br>";
      break;
   case 3:
      echo "Fan speed is 3  <br>";
      break;
   default:
      echo "Fan speed is invalid <br>";
      break;
}
?>