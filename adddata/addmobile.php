<?php
//backend
if (!isset($_POST['name'])) {
   include "addmobile.html.php";
} else {
   try {
      $pdo = new PDO('mysql:host=localhost; dbname=mobiledb; charset=utf8mb4', 'root', '');
      $sql = "INSERT INTO mobile (name, image) VALUES (:name, :image)";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':name', $_POST['name']);
      $stm->bindValue(':image', $_POST['image']);
      $stm->execute();
      echo "Add mobile succeed !";
   } catch (PDOException $error) {
      echo "Connect to DB error: $error";
   }
}
?>