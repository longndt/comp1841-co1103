<?php
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];

if (isset($_POST['calculation'])) {
   $calculation = $_POST['calculation'];

   switch ($calculation) {
      case "add":
         echo "<h1>Result :" . ($value1 + $value2) . "</h1>";
         break;

      case "subtract":
         echo "<h1>Result : " . ($value1 -$value2) . "</h1>";
         break;

      case "multiply":
         echo "<h1>Result : " . ($value1 * $value2) . "</h1>";
         break;

      case "divide":
         if ($value2 != 0)
            echo "<h1>Result : " . ($value1 / $value2) . "</h1>";
         else
            echo "<h1 style='color: red; background-color: yellow';> Invalid number. Value 2 (Denominator) can not be 0";
         break;

      case "modulus":
         echo "<h1>Result : " . ($value1 % $value2) . "</h1>";
         break;

      default:
         echo "<h1>Invalid calculation</h1>";
         break;
   }
} else {
   include "lab2_error.php";
}
