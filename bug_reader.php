<?php
include ('db.php');
    
    if (isset($_GET['id']) && isset($_GET['bug_id'])) {
       $project_id=(int) $_GET['id'];
       $bug_id=(int) $_GET['bug_id'];
       
    } else {
        header('Location: errors/404.php');
    }

 $query = "SELECT `project_name`,`assignet_to` FROM `table_of_tasks_project-name` WHERE `id`=".$_GET['id']." ";
    $result = mysqli_query($con, $query);
        if (!$result) {
            $result='Sorry there was an error. Please try again later.';
            exit(mysqli_error($con));          
        }
        else{
            $result=mysqli_fetch_array($result,MYSQLI_ASSOC);
            $project_name = $result['project_name'];
            $assignet_to = $result['assignet_to'];
        }
        mysqli_close($con);
?>