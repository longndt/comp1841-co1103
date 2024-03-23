<?php
//CREATE feature: insert data (record) to database

//check whether user has submitted form or not
if (isset($_POST['joketext'])) { //case 1: user has submitted the form => run sql statement
   try {
      //connect to database to insert data
      include "includes/DatabaseConnection.php";

      //define sql query (statement)
      $sql = "INSERT INTO jokes (joketext, jokedate, image) VALUES (:joketext, :jokedate, :image)";

      //prepare sql statement
      $stm = $pdo->prepare($sql);

      //bind values
      $stm->bindValue(":joketext", $_POST['joketext']);
      $stm->bindValue(":jokedate", $_POST['jokedate']);
      $stm->bindValue(":image", $_POST['image']);

      //execute statement (stm)
      $stm->execute();

      //show successful message
      //echo "Insert new joke succeed !";

      //redirect page after insert successfully
      header('Location: jokes.php');

      //catch database connection error (if have)
   } catch (PDOException $e) {
      $title = 'An error has occured';
      $output = 'Database error: ' . $e->getMessage();
   }
} else { //case 2: user has not submitted the form => load the form first
   ob_start();
   $title = "Add new joke";
   include 'templates/addjoke.html.php';
   $output = ob_get_clean();
}

include 'templates/layout.html.php';
