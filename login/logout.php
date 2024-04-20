<?php
//start session
session_start();
//unset session
unset($_SESSION['login']);
//destroy session
session_destroy();
//redirect to login page
header("Location: login.php");
