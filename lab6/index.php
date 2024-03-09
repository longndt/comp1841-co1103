<?php
//Path: C:/xampp/htdocs/lab6/index.php
//URL : localhost/lab6
//Note: index.php is default homepage => we do not need to include it in URL

//Purpose: connect to MySQL and retrieve data

//establish connection to MySQL database server
//using PDO (PHP Data Object) method

//use "try...catch" to check connection to db successful or not
try {
   $pdo = new PDO('mysql:hostname=localhost;dbname=jokedb;charset=utf8mb4', 'root', '');
   //only need to change database name for new project
   //if you use Mamp, change database password to 'root'

   //display success message (ignore this in final version)
   //echo "success";

   //next step: retrieve (get) data from table "jokes" in database
   //guide: use SQL statement to work with database in PHP
   //SELECT * FROM table_name  ==> READ feature
   $sql = "SELECT * FROM jokes"; //select all columns
   //$sql1 = "SELECT joketext, jokedate FROM jokes"; //select specific columns

   //execute (run) the SQL statement and return the result then save to a variable
   $joke_list = $pdo->query($sql);

   //pass "$joke_list" to display in the front-end (UI) file named "jokes.html.php"
   include("templates/jokes.html.php");

} catch (PDOException $error) {
   echo "failure: $error";
}
?>