<?php
try {
   //connect php (backend) to mysql (database)
   $connection = new PDO('mysql:host=localhost;dbname=greenwich;charset=utf8mb4', 'root', '');
   //echo "Connect to database success ! <br>";

   //define & execute sql query to retrieve data from database
   $sql = "SELECT * FROM student";
   //$sql = "SELECT id, name, email FROM student";
   $students = $connection->query($sql);

   //include the result web page
   include "student_list.html.php";
} catch (PDOException $exception) {
   echo "Connect to database failed ! <br>";
   echo $exception;  //show detail error
}

/*
mysql: database server
localhost: local server (because we run code in PC not in cloud)
greenwich: database name (which we want to connect)
utf8mb4: character set, utf8 is unicode
root: default Xampp database server username
'_nothing_here_' : default Xampp database server password
For Mamp: root - root
*/
