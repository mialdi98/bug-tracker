<?php

	if(isset($_POST['github_link']) && isset($_POST['description']) )
	{
		// include Database connection file 
		include("db.php");

		// get values 
		$github_link = $_POST['github_link'];
		$project_name = $_POST['project_name'];
		$assignet_to = $_POST['assignet_to'];
		$description = $_POST['description'];

		$query = "INSERT INTO `table_of_tasks_main`(github_link,project_name, assignet_to,description) VALUES('$github_link', '$project_name', '$assignet_to', '$description')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "Project Added!";
	}
?>