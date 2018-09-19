<?php require ("ajax/authorization.php");
require_once ("rights.php");
if(isset( $_POST['logout'])) {if(isset($_SESSION['id'])){unset($_SESSION['id']);header('location:'.'index.php'); exit;}} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Bug-tracker Project bugs</title>
    <!-- Bootstrap CSS File  -->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>

<!--NavBar Start-->
<nav class="navbar navbar-default" role="navigation"> 
<div class="container-fluid">
 <div class="navbar-header">
    <img src="img/favicon.ico" width="40" height="40" alt="">&nbsp</div>
    <ul class="nav navbar-nav ">
      <li><a href="index.php">Home</a></li>
      <?php //if user login 
      if(isset( $_POST['logout'])) {if(isset($_SESSION['id'])){unset($_SESSION['id']);}} 
      if(isset($_SESSION["id"])) {?>
      <li class="active"><a href="project.php">Project</a></li>
      <li><a href="profile.php">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
            <form method="POST">
              <button  type="submit" name="logout" id="logout" style ="outline: 0; outline-offset: 0; margin-top:8px;text-decoration: none;" class="btn btn-link" value="Submit" onclick="logout()"><span class="glyphicon glyphicon-log-in "></span> Logout</button>
            </form>
         </li>
      <?php }else {//if user not login?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li>
         <button style ="outline: 0; outline-offset: 0; margin-top:8px;text-decoration: none;" class="btn btn-link" onclick="loginForm()"><span class="glyphicon glyphicon-log-in "></span> Login</button></li>
          
      <?php } ?>
    </ul>
</div>
</nav>
<!--Navbar end-->

<!-- Content Section -->
<?php include("projectbugs_reader.php"); ?>
<div class="container">        
            <table class="table table-bordered table-striped table-hover">
                <thread>
                <tr>
                    <th class="text-center" colspan="6">Project [<?php echo $project_name ?>] - Bugs list
                        <div class="pull-right">
                            <button class="btn btn-success" data-toggle="modal" data-target="#add_new_projectbugs_modal" <?php if (action("C")!=true){ echo 'style="display:none;"';}?> >Add New Bug</button>
                            </div>
                    </th>
                </tr> 
                </thread>
            </div>
                <tbody>
                        <tr>
                            <th class="col-md-1 text-center">Id</th>
                            <th class="col-md-1 text-center">Git</th>
                            <th class="col-md-5 text-center">Start time/End time</th>
                            <th class="col-md-1 text-center">Status</th>
                            <th class="col-md-2 text-center">Assignet to</th>
                            <th class="col-md-2 text-center">Options</th>
                        </tr>          
                </tbody>
                </td>
            </table>
            <input type="hidden" readonly="readonly" id="project_id" value=<?php echo '"'.$project_id.'"' ?>>

        <div class="projectbugs_content"></div>  

</div>
</div>
</div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Project bug -->
<div class="modal fade" id="add_new_projectbugs_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Bug</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="github_link">GIT link</label>
                    <input type="text" id="github_link" placeholder="Git link" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="project_name_show">Project name</label>
                    <input type="text" readonly="readonly" id="project_name_show" value="<?php echo htmlspecialchars($project_name);?>" class="form-control"/>
                    <input type="hidden" readonly="readonly" id="project_name" value="<?php echo htmlspecialchars($project_id);?>"/>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" id="status" readonly="readonly" value="open" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="assignet_to">Assignet to</label>
                    <input type="text" readonly="readonly" id="assignet_to" value="<?php echo htmlspecialchars($assignet_to);?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>    
                    <textarea style="resize:vertical;" id="description" class="form-control" rows="3" placeholder="Description of bug"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addProjectbugs()">Add Bug</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update details -->
<div class="modal fade" id="update_projectbugs_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="update_github_link">GIT link</label>
                    <input type="text" id="update_github_link" placeholder="Git link" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="update_project_name">Project name</label>
                    <input type="text" readonly="readonly" id="project_name_show" value="<?php echo htmlspecialchars($project_name);?>" class="form-control"/>
                    <input type="hidden" readonly="readonly" id="update_project_name" value="<?php echo htmlspecialchars($project_id);?>"/>
                </div>
                <div class="form-group">
                    <label for="update_assignet_to">Assignet to</label>
                    <input type="text" id="update_assignet_to" value="<?php echo htmlspecialchars($assignet_to);?>" class="form-control"/>
                </div>
                <div class="form-group"> 
                <label for="update_status">Status</label>
                <div class="selectContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="update_status" id="update_status" class="form-control selectpicker">
                        <option disabled>Select Status</option>
                        <?php if (action("open")==true) { echo'<option value="open">open</option>'; } ?>
                        <?php if (action("in work")==true) { echo'<option value="in test">in test</option>'; } ?>
                        <?php if (action("in test")==true) { echo'<option value="in work">in work</option>'; } ?>
                        <?php if (action("closed")==true) { echo'<option value="closed">closed</option>';} ?>                  
                    </select>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="update_description">Description</label>    
                    <textarea style="resize:vertical;" id="update_description" class="form-control" rows="3" value="<?php echo htmlspecialchars($description);?>" placeholder="Description of bug"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateProjectbugsDetails()" >Save Changes</button>
                <input type="hidden" readonly="readonly" id="hidden_projectbugs_id"/>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/projectbugs_script.js"></script>
</body>
</html>