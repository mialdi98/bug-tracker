<?php
function action($Action){
    //echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH).'THAN ACTION IS '.$Action.' ;';
    switch (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
        case ('/project.php'):
            return rights(100,$Action);
            break;
        case ('/ajax/readProject.php'):
            return rights(100,$Action);
            break;    
        case ('/projectbugs.php'):
            return rights(101,$Action);
            break;
        case ('/ajax/readProjectbugs.php'):
            return rights(101,$Action);
            break;
        case ('/bug.php'):
            return rights(102,$Action);
            break;
         case ('/ajax/readBug.php'):
            return rights(102,$Action);
            break;
        default:
            return NULL;
            break;
    }
}

function rights($RightsID,$Action){ //function take ID of needed content to show , give back permissions
    
  // check request
if(isset($_COOKIE['user_name']) && !empty($Action))
{
    // include Database connection file
  include("./db.php");
    // get values
    $user_name = $_COOKIE['user_name'];
    $query = "
    SELECT 
        t1.`user_name`,
        t1.`roleOf`,
        t2.`RightsID`,
        t2.`Action`
    FROM 
        `reg_table_main` t1 
    INNER JOIN
        `permissions` t2
        ON
            t1.`roleOf` = t2.`Group`
    WHERE t1.`user_name` = '$user_name' AND t2.`RightsID`= '$RightsID' AND t2.`Action`='$Action'
    ";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($con);
    if($Action==$row['Action']) return TRUE;
    else return FALSE;

    //return $permissions;
}  
else 
    return FALSE;
}