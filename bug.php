<?php require ("ajax/authorization.php");
if(isset( $_POST['logout'])) {if(isset($_SESSION['id'])){unset($_SESSION['id']);header('location:'.'index.php'); exit;}} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Bug-tracker Project bug</title>
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
      <li ><a href="index.php">Home</a></li>
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
<?php include("bug_reader.php"); ?>
<div class="container">        
            <table class="table table-bordered table-striped table-hover">
                <thread>
                <tr>
                    <th class="text-center" colspan="6">Project [<?php echo $project_name ?>] - Bug
                    </th>
                </tr> 
                </thread>
            </div>
                <tbody>
                        <tr>
                            <th class="col-md-1 text-center">Id</th>
                            <th class="col-md-1 text-center">git</th>
                            <th class="col-md-5 text-center">Start time/End time</th>
                            <th class="col-md-1 text-center">Status</th>
                            <th class="col-md-2 text-center">Assignet to</th>
                            <th class="col-md-2 text-center">Options</th>
                        </tr>          
                </tbody>
                </td>
            </table>
            <input type="hidden" readonly="readonly" id="project_id" value="<?php echo $project_id?>">
            <input type="hidden" readonly="readonly" id="bug_id" value="<?php echo $bug_id?>">
        <div class="bug_content"></div>  

</div>
</div>
</div>
</div>
<!-- /Content Section -->

<!-- Modal - Update details -->
<div class="modal fade" id="update_bug_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateBugDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_bug_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Edit Description -->
<div class="modal fade bd-example-modal-lg"" id="update_bug_description_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="update_description">Description</label>    
                    <textarea style="resize:vertical;" id="update_description" class="form-control" rows="3" value="<?php echo htmlspecialchars($description);?>" placeholder="Description of bug"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="EditBugDescription()" >Save Changes</button>
                <input type="hidden" id="hidden_bug_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/bug_script.js"></script>
</body>
</html>