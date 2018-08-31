<?php
include ('db.php');
    
    if (isset($_GET['id']) && isset($_GET['bug_id'])) {
       $project_id=(int) $_GET['id'];
       $bug_id=(int) $_GET['bug_id'];
       
    } else {
        header('Location: ../404.php');
    }

    $query1 = "SELECT `project_name` FROM `table_of_tasks_project-name` WHERE `id`=".$_GET['id']." ";
    $result1 = mysqli_query($con, $query1);
    $query2 = "SELECT `user_name` FROM `reg_table_main` ";
    $result2 = mysqli_query($con, $query2);
        if (!$result1 && !$result2) {
            $result1='Sorry there was an error. Please try again later.';
            exit(mysqli_error($con));          
        }
        else{
            $result1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
            $project_name = $result1['project_name'];
            $result2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
            $user_name = $result2['user_name'];
        }
        mysqli_close($con);
?>