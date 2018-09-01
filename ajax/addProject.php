<?php

	if(isset($_POST['project_name']) && isset($_POST['assignet_to']))
	{
		// include Database connection file 
		include("../db.php");

		// get values 
		$project_name = $_POST['project_name'];
		$assignet_to = $_POST['assignet_to'];

		$query = "INSERT INTO `table_of_tasks_project-name`(project_name, assignet_to) VALUES('$project_name', '$assignet_to')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "Project Added!";
	}
?>