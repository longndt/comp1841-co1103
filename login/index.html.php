<?php
//check whether user login succeed or not
include "checkLogin.php";

//display page content if user login succeed
echo "<h1>This is homepage</h1>";
echo "<a href='admin.html.php'>Admin Page</a><br>";
echo "<a href='logout.php'>Logout</a>";
