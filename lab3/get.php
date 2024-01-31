<?php
// get.php
//step 2.receive data in PHP using global variable $_GET

if (isset($_GET['university'])) {
   $uni = $_GET['university'];
   echo $uni;
}


if (isset($_GET['city'])) {
   $city = $_GET['city'];
   echo $city;
}
