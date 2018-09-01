<?php
// include Database connection file
include("../db.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $project_name = $_POST['project_name'];
    $assignet_to = $_POST['assignet_to'];

    // Updaste User details
    $query = "UPDATE `table_of_tasks_project-name` SET project_name = '$project_name', assignet_to = '$assignet_to' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}