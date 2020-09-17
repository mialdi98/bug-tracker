<?php
include ('./db.php');
	if (isset($_POST["submit"])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$roleOf = $_POST['roleOf'];
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$confirm_password = $_POST['confirm_password'];
		$email = $_POST['email'];
		//$human = intval($_POST['human']);

		//first name
		if (!$_POST['first_name']) {
			$errFirstName.= 'Please enter your First name<br>';
		}
		if(!preg_match("#^[aA-zZ]+$#",$_POST['first_name'])){
			$errFirstName.= 'Do not use any special characters!<br>';
		}
		if (!$_POST['last_name']) {
			$errLastName.= 'Please enter your Last name<br>';
		}
		if(!preg_match("#^[aA-zZ]+$#",$_POST['last_name'])){
			$errLastName.= 'Do not use any special characters!<br>';
		}
		//role 
		if (!$_POST['roleOf']) {
			$errRoleOf.= 'Please enter your Role<br>';
		}
		//user name
		$options = array(
    		'options' => array(
        	'min_range' => 6,
        	'max_range' => 16
    		)
		);
		$queryCheckUserName = mysqli_query($con, "SELECT COUNT(id) FROM reg_table_main WHERE user_name='".$_POST['user_name']."'");
		if (!$_POST['user_name']) {
			$errUserName.= 'Please enter your Username<br>';
		}
		if(mysqli_num_rows($queryCheckUserName) == 0){
			$errUserName.= 'This Username already used<br>';
		}
		if (!filter_var(strlen($_POST['user_name']), FILTER_VALIDATE_INT,$options)){
			$errUserName.= 'Please change length of your Username<br>';
		}
		if(!preg_match("#^[aA-zZ0-9\-_]+$#",$_POST['user_name'])){
			$errUserName.= 'Do not use special characters!<br>Only \'_\'and \'-\'Are all allowed<br>';
		}
		//password
		if (!$_POST['user_password']) {
			$errUserPassword.= 'Please enter your password<br>';
		}
		if(!filter_var(strlen($_POST['user_password']), FILTER_VALIDATE_INT,$options)){
			$errUserPassword.= 'Password is too short or too long<br>';
		}
		if(!preg_match("#^[aA-zZ0-9\-_]+$#",$_POST['user_password'])){
			$errUserPassword.= 'Do not use special characters!<br>Only \'_\'and \'-\'Are all allowed<br>';
		}
		//confirm password
		if (!$_POST['confirm_password']) {
			$errUserPasswordConfirm.= 'Please confirm your password<br>';
		}
		if(!filter_var(strlen($_POST['confirm_password']), FILTER_VALIDATE_INT,$options)){
			$errUserPasswordConfirm.= 'Password is too short or too long<br>';
		}
		if($_POST['user_password'] !== $_POST['confirm_password']){
			$errUserPasswordConfirm.= 'Passwords do not match<br>';
		}
		if(!preg_match("#^[aA-zZ0-9\-_]+$#",$_POST['confirm_password'])){
			$errUserPasswordConfirm.= 'Do not use special characters!<br>Only \'_\'and \'-\'Are all allowed<br>';
		}
		//email
		$queryCheckEmail = mysqli_query($con,"SELECT COUNT(id) FROM reg_table_main WHERE email='".$_POST['email']."'");
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail.= 'Please enter a valid email address<br>';
		}
		if(mysqli_num_rows($queryCheckEmail) == 0){
			$errEmail.= 'This email address is already used<br>';
		}
		
		/*//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}*/
 
if (!$errFirstName && !$errLastName && !$errRoleOf && !$errUserName && !$errUserPassword && !$errUserPasswordConfirm && !$errEmail) {
		$user_password=md5($user_password+md5($user_password)); //some type of salf
	$query = "INSERT INTO reg_table_main(first_name, last_name, roleOf, user_name, user_password, email) VALUES('$first_name', '$last_name', '$roleOf', '$user_name', '$user_password', '$email')";
        if (!$result = mysqli_query($con, $query)) {
        	$result='<div class="alert alert-danger">Sorry there was an error. Please try again later</div>';
            exit(mysqli_error($con));
            
        }
        else {
        	$result='<div class="alert alert-success">Registration Completed!</div>';
        	mysqli_close($con);
        }
}
	}
?>