<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student List</title>
</head>

<body>
   <table border=1>
      <tr>
         <th colspan=3>
            <h2>STUDENT LIST</h2>
         </th>
      </tr>
      <tr>
         <th>Student ID</th>
         <th>Student Name</th>
         <th>Student Email</th>
      </tr>

      <?php
      foreach ($students as $student) {
      ?>
         <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
         </tr>
      <?php } ?>
   </table>
</body>

</html>