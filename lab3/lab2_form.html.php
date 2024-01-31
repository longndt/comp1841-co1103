<html>

<body>
   <form action="lab2_result.php" method="post">
      Value 1: <input type="number" name="value1" required>
      <br> <br>
      Value 2: <input type="number" name="value2" required>
      <hr>
      Calculation: <br>
      <input type="radio" name="calculation" value="add"> Add
      <input type="radio" name="calculation" value="subtract"> Subtract
      <input type="radio" name="calculation" value="multiply"> Multiply
      <input type="radio" name="calculation" value="divide"> Divide
      <input type="radio" name="calculation" value="modulus"> Modulus
      <br> <br>
      <input type="submit" value="Calculate">
      <input type="reset" value="Clear">
   </form>
</body>

</html>