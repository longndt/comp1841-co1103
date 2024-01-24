<?php
$x = 10;  //in fact, this value will be retrived from DB using PHP
echo "Price: " . $x . "$";

//single line comment
/*
   multiple
   line
   comment
*/
/*
  NOTES:
  - We use comment to explain code, make code hidden (disable) temporarily
  - PHP is flexible language => We do not declare data type for variable
  - When do we need to use PHP to combine with HTML ?
  => When we want to do some business processing such as Database manipulation
    (Create, Read, Update, Delete,...) because HTML can not connect directly to Database
*/
?>
<h1 style="color: red;">
   <?php echo "Price: " . $x . "$"; ?>
</h1>

<h1 style="color: blue;">
   Price: 10$
</h1>