<?php
//attach file "a.php" using "include" or "require"

//include "a.php";
require "a.php";

//include (optional) : without "a.php" => "b.php" still can run (only warning)
//require (compulsory) : without "a.php" => "p.php" can not run (warning + error)

//We use "include" & "require" for code snippets that we use frequently
//So that we do not need to copy code multiple times
//It is also convenient when we want to maintain codes

//display the value of variable "year" in file "b.php"
echo $year;
?>