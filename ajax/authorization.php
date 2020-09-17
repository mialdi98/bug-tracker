<?php 
session_start();
if(!isset($_SESSION["id"]))
{
	if(isset($_COOKIE["user_name"]) && isset($_COOKIE["user_password"])) { //if COOKIE was used but user logout
					setcookie ("user_name","");
					setcookie ("user_password","");
	}
}


if(isset($_POST["login"]))   
{  
 if(!empty($_POST["user_name"]) && !empty($_POST["user_password"]))
 {
 	$password = md5($_POST["user_password"]+md5($_POST["user_password"])); //some type of salf
	// include Database connection file 
	include("./db.php");

	$query = "
	SELECT 
	`id`,
	`user_name`,
	`user_password` 
	FROM 
	reg_table_main 
	WHERE 
	user_name = '".$_POST["user_name"]."' AND user_password = '".$password."'";
	
	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
		$user = mysqli_fetch_array($result);
		if($user) 
		{
			if(!empty($_POST["remember"])) { //if remember me
				setcookie ("user_name",$_POST["user_name"],time()+ (10 * 365 * 24 * 60 * 60)); // 1 month
				setcookie ("user_password",$password,time()+ (10 * 365 * 24 * 60 * 60)); // 1 month
				$_SESSION["id"] = $user["id"];
			} 
			else{ //if not
					setcookie ("user_name",$_POST["user_name"]);
					setcookie ("user_password",$password);
					$_SESSION["id"] = $user["id"];
			}
			if(!empty($_SERVER['QUERY_STRING'])){ //if URI with query
				header('location:'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']); exit;
			}
			else {	// if URI without query
				header('location:'.$_SERVER['PHP_SELF']); exit;
			}
		} 
		else {
			$ErrorMsg = "Username or Password are wrong!";
		}

	}
	else {
		$ErrorMsg = "Both are Required Fields!";
	}
}

?>