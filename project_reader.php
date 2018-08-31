<?php
include ('db.php');

	$query = "SELECT `user_name` FROM `reg_table_main` LIMIT 1";
	$result = mysqli_query($con, $query);
        if (!$result) {
        	$result='Sorry there was an error. Please try again later.';
            exit(mysqli_error($con));          
        }
        else{
        	$result=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$user_name = $result['user_name'];
	       }
        mysqli_close($con);
?>