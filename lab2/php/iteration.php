<?php
//FOR LOOP
for ($i=1; $i<=10; $i++) {
   if ($i%2==0)
      echo $i . "<br>";
}

//WHILE LOOP
$i = 1;
while ($i<=10) {
   echo $i . "<br>";
   $i++;
}

//DO WHILE LOOP
$i = 1;
do {
   echo $i . "<br>";
   $i++;
}
while ($i <= 10);

//FOR EACH LOOP
//declare array in PHP
$cities = ["Hanoi", "HCM City", "Da Nang", "Can Tho", "Ca Mau"];
echo $cities[2] . "<br>"; //display element by array index

foreach ($cities as $city)
  //cities: array name, city: element name
  echo $city . "<br>";

//display array data (element) with traditional for loop
for ($i=0; $i<count($cities); $i++)
   echo ($i+1) . ". " . $cities[$i] . "<br>";
?>

