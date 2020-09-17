<?php
// include Database connection file
include("./db.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
	$description = $_POST['description'];
	$github_link = $_POST['github_link'];
	$status = $_POST['status'];

    if($status =='closed'){
        $end_time = date('Y-m-d h:i:s');
        $query = "UPDATE `table_of_tasks_main` SET description = '$description', github_link = '$github_link', status='$status', end_time = '$end_time' WHERE id = '$id'";
    }
    else 
    {
        $query = "UPDATE `table_of_tasks_main` SET description = '$description', github_link = '$github_link', status='$status' WHERE id = '$id'";
    }
    // Updaste User details
    
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}