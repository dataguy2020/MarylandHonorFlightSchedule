<?php
include ("database.php"); 
$dbconnect=mysqli_connect($hostname,$username,$token,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>
