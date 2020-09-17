<?php

	if(isset($_POST['github_link']) && isset($_POST['description']) )
	{
		// include Database connection file 
		include("./db.php");
		// get values 
		$github_link = $_POST['github_link'];
		$project_name = $_POST['project_name'];
		$status = $_POST['status'];
		$assignet_to = $_POST['assignet_to'];
		$description = $_POST['description'];

		$query = "INSERT INTO table_of_tasks_main (github_link, project_name, status, assignet_to, description) VALUES('$github_link', '$project_name', '$status', '$assignet_to', '$description')";
		if (!$result = mysqli_query($con, $query)) {
			$error = mysqli_error($con);
	        exit(mysqli_error($con));
	    }
	    echo "Project Added!";
	}
?>