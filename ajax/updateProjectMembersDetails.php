<?php
// include Database connection file
include("./db.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $project_name = $_POST['project_name'];

    $query = "SELECT `members` FROM `table_of_tasks_project-name` WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    while($row = mysqli_fetch_assoc($result)){
        $members = $row['members'].','.$_POST['members'];
    }
    
    mysqli_free_result($result);
    // Updaste members
    $query = "UPDATE `table_of_tasks_project-name` SET project_name = '$project_name', members = '$members' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}