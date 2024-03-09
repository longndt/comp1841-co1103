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
         <?= $joketext ?>
         <!-- use "date" & "strtotime" functions to customize date format -->
         <!---
            D (date): Mon Tue Wed ...
            d (day): 04 15 30 ...
            M (month): Jan Feb Mar ...
            m (month): 01 04 12 ...
            Y (year): 2023 2024 ...
            y (year): 23 24 ....
         -->
         <?= date("d/m/Y", strtotime($joke['jokedate'])) ?>
         <!-- 1st method: image files are included inside project folder -->
         <!-- note: create "images" folder then copy images to project folder first -->
         <img src="images/<?= $joke['image'] ?>" width=100 height=100>

         <!-- 2nd method: image files are on Internet, only need to include url
          <img src="<?= $joke['image'] ?>" width=100 height=100>
         -->

         <!-- 3rd method: image files are BLOB format and store in database -->
         <!-- note: create new column named "pic" with data type BLOB then upload file to db first -->
         <!--
         <?php
         echo '<img src="data:image/jpeg;base64,' . base64_encode($jokes['pic']) . '"/>';
         ?>
         -->
         <!-- Note: we can only use 1 of 3 method for 1 code -->
      </blockquote>
   <?php
   };
   ?>
</body>

</html>