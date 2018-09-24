<?php
require_once ("../rights.php");
require_once("../isMemberOf.php");
	// include Database connection file 
	include("../db.php");

	// Design initial table header 
	$data = '  <table class="table table-bordered table-hover">';

	$query = "SELECT * FROM `table_of_tasks_project-name`";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $data.='<style></style>';
    	while($row = mysqli_fetch_assoc($result))
    	{
            if(isMemberOf($row['id'])==true){
    		$data .= '
			<tr>
				<td class="text-center col-md-1"><a href="/projectbugs.php?id='.$row['id'].'">'.$row['id'].'</a></td>
				<td class="text-center col-md-7"><a href="/projectbugs.php?id='.$row['id'].'">'.$row['project_name'].'</a></td>
				<td class="text-center col-md-2"><a href="/profile.php?user_name='.$row['assignet_to'].'">'.$row['assignet_to'].'</a></td>
                  
                <td class="text-center col-md-1">
					<button  onclick="GetProjectDetails('.$row['id'].')" class="btn btn-warning"' ;
                    if (action("U")!=true) $data.=' style="display:none;" ';
                    $data.='>Update</button>
				</td>
				<td class="text-center col-md-1" >
					<button onclick="DeleteProject('.$row['id'].')" class="btn btn-danger"' ;
                    if (action("D")!=true) $data.=' style="display:none;" ';
                    $data.='>Delete</button>
				</td>
    		</tr>
    		';
            }
    	}
    }

    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Project not found or not created</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>