<?php
session_start();

//user did not login or login failed
//redirect to login page
if (!(isset($_SESSION['login']))) {
   header("Location: login.html.php");
}
