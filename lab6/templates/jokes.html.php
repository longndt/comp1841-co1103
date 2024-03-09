<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Joke List</title>
</head>

<body>
   <?php
   foreach ($joke_list as $joke) { ?>
      <!-- 1st way: display data using column index (start from 0 not 1)
      ex: column 1 (from left-side) has index 0
          column 2 .......................... 1

      <blockquote>
         <?= $joke[0] ?>
         <?= $joke[1] ?>
         <?= $joke[2] ?>
         <img src="<?= $joke[3] ?>" alt="test">
      </blockquote>
     -->

      <!-- 2nd way: display data using column name -->
      <blockquote>
         <?= $joke['id'] ?>
         <?= $joke['joketext'] ?>
         <?= $joke['jokedate'] ?>
         <img src="images/<?= $joke['image'] ?>"
         width=100 height=100>
      </blockquote>
   <?php
   };
   ?>
</body>

</html>