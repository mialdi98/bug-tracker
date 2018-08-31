<?php
	// include Database connection file 
	include("db.php");

	// Design initial table header 
	$data = '  <table class="table table-bordered table-hover">';

    $project_id = $_GET['project_id'];
    $query = "
    SELECT 
        t1.`id` as bug_id, 
        t1.`github_link`,
        t1.`start_time`,
        t1.`end_time`, 
        t1.`status`,
        t1.`assignet_to`,
        t1.`project_name`,
        t1.`description`,
        t2.`project_name`, 
        t2.`id` 
    FROM
        `table_of_tasks_main` t1 
    INNER JOIN
        `table_of_tasks_project-name` t2 
            ON t1.`project_name` = t2.`id` 
    WHERE t2.`id`='$project_id'"; 
	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    { 
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '
			<tr>
                            <td class="col-md-1 text-center"><a href="/bug.php?id='.$project_id.'&bug_id='.$row['bug_id'].'">'.htmlspecialchars($row['bug_id']).'</a></td>
                            <td class="col-md-1 text-center"><a href="'.$github_link.'">GIT</a></td>
                            <td class="col-md-5 text-center">'.htmlspecialchars($row['start_time']).'/'.htmlspecialchars($row['end_time']).'</td>
                            <td class="col-md-1 text-center">'.htmlspecialchars($row['status']).'</td>
                            <td class="col-md-2 text-center"><a href="#">'.htmlspecialchars($row['assignet_to']).'</a></td>
                <td class="text-center col-md-1">
                    <button onclick="GetProjectbugsDetails('.$row['bug_id'].')" class="btn btn-warning">Update</button>
                </td>
                <td class="text-center col-md-1" >
                    <button onclick="DeleteProjectbugs('.$row['bug_id'].')" class="btn btn-danger">Delete</button>
                </tr>
    		';
    	}
    }

    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Project bugs not found or not created</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>