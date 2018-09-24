<?php
function isMemberOf($project_id){
if(isset($_COOKIE['user_name']) && !empty($project_id))
{
    // include Database connection file
  include("db.php");  
    // get values
    $user_name = $_COOKIE['user_name'];
    $query = "
    SELECT 
    	t1.`id`,
        t2.`user_name`,
        t1.`members`
    FROM 
        `table_of_tasks_project-name` t1 
    INNER JOIN
         `reg_table_main` t2
    WHERE t1.`id` = '$project_id'
    ";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($con);
    $members=explode(',',$row['members']);
    return in_array($user_name,$members);
}  
else 
    return FALSE;
}
?>