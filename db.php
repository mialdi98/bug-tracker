<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "root";
$mysql_database = "bug-tracker-v1";

$con = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database) 
or die("Something is broken");

//mysqli_select_db($mysql_database, $link) or die("Couldn't find link");

?>