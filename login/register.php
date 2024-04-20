<?php
//show register form at first
if (!isset($_POST['register'])) {
   include 'register.html.php';
}
else {
   try {
      include 'dbConnect.php';

      //get data from registration form
      $username = $_POST['username'];
      $password = $_POST['password'];
      //encrypt password with md5 technique
      $hash = md5($password);
      //set default role to "user"
      $role = "user";

      //insert new user to database
      $sql = "INSERT INTO user (username, password, role) VALUES (:username, :password, '$role')";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':username', $username);
      $stm->bindValue(':password', $hash);
      $stm->execute();

      //display success message
      echo "<h1>Register succeed !</h1>";
      //include login form
      include "login.html.php";
   } catch (PDOException $error) {
      echo "Connect to DB failed ! <br>";
      echo $error;
   }
}
