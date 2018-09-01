<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("../db.php");
 
    // get user id
    $project_id = $_POST['id'];
 
    // delete User
    $query = "DELETE FROM `table_of_tasks_main` WHERE id = '$project_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>