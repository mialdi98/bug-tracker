<?php
$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "bug-tracker";

$con=mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database) 
or die("Somesing is broken");

//mysqli_select_db($mysql_database, $link) or die("Couldn't find link");

?>