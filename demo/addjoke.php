<?php
//CREATE feature: insert data (record) to database

//check whether user has submitted form or not
if (isset($_POST['joketext'])) { //case 1: user has submitted the form => run sql statement
   try {
      //connect to database to insert data
      include "includes/DatabaseConnection.php";

      //1st way: using bind value
      //define sql query (statement)
      $sql = "INSERT INTO jokes (joketext, jokedate, image) VALUES (:joketext, :jokedate, :image)";

      //prepare sql statement
      $stm = $pdo->prepare($sql);

      //bind values
      $stm->bindValue(":joketext", $_POST['joketext']);
      $stm->bindValue(":jokedate", $_POST['jokedate']);
      $stm->bindValue(":image", $_POST['image']);

      //2nd way: using bind param
      // $sql = "INSERT INTO jokes (joketext, jokedate, image, jokeauthor) VALUES (?, ?, ?)";
      // $stm = $pdo->prepare($sql);
      // $stm->bindParam(1,$_POST['joketext']);
      // $stm->bindParam(2, $_POST['jokedate']);
      // $stm->bindParam(3, $_POST['image']);

      //execute statement (stm)
      $stm->execute();

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
