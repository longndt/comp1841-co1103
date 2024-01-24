<?php
 //main purpose of function: code reuse

 //1st type: no parameter (input), no return (output)
 function hello() {
   echo "Hello World <br>";
   echo "Web Programming 1 <br>";
   echo "Greenwich Vietnam <br>";
   echo "Pham Van Bach - Cau Giay - HN <br>";
 }
 hello(); //function call

 //2nd type: has parameter, no return
 function calculateSum($a, $b) {
   //$a, $b: parameter (tham số)
   $c = $a + $b;
   echo "Total : " . $c . "<br>";
 }
 calculateSum(6,9);
 //5, 7: argument (đối số)
 //total of parameter = total of argument
 //data type of parameter = data type of argument

 //3rd type: no parameter, has return
  function welcome() {
    return "Welcome to Greenwich Vietnam <br>";
  }
  echo welcome();

  //4th type: has parameter, has return
  function multiplication($x, $y) {
    return ($x * $y);
  }
  print "Product : " . multiplication(10,50);
?>



