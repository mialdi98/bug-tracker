<?php
// include Database connection file
include("db.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
	$description = $_POST['description'];
	$github_link = $_POST['github_link'];
    // Updaste User details
    $query = "UPDATE `table_of_tasks_main` SET description = '$description', github_link = '$github_link' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}