<?php
include ('db.php');

	$query = "SELECT * FROM `reg_table_main` LIMIT 1";
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