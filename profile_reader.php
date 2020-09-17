<?php
include ('./db.php');
if (isset($_GET['user_name'])) {
       $user_name=$_GET['user_name'];
       $query = "
    SELECT 
        * 
    FROM 
        `reg_table_main`
    WHERE
        `user_name` = '$user_name' 
    ";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 0){
        $query=null;
        $result=null;
        header('Location: errors/404.php');
    }
    $query=null;
    $result=null;
    }elseif(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY)==null){
        $user_name=$_COOKIE['user_name'];
    }

	$query = "
    SELECT 
        * 
    FROM 
        `reg_table_main`
    WHERE
        `user_name` = '$user_name' 
    ";
	$result = mysqli_query($con, $query);
        if (!$result) {
        	$result='Sorry there was an error. Please try again later.';
            exit(mysqli_error($con));          
        }
        else{
        	$result=mysqli_fetch_array($result,MYSQLI_ASSOC);
        	$first_name = $result['first_name'];
			$last_name = $result['last_name'];
			$roleOf = $result['roleOf'];
			$user_name = $result['user_name'];
			$email = $result['email'];
        }
        mysqli_close($con);
?>