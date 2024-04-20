<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Registration</title>
   <script>
      function showPassword() {
         var x = document.getElementById("password");
         if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
      }
   </script>
</head>

<body>
   <form action="register.php" method="post">
      <h1>User Registration</h1>
      Username: <input type="text" name="username" id="" required>
      <br><br>
      Password: <input type="password" name="password" id="password" required>
      <br><br>
      <input type="checkbox" onclick="showPassword()">Show Password
      <br><br>
      <input type="submit" value="Register" name="register">
   </form>
</body>

</html>