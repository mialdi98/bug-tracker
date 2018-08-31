<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Bug-tracker Project</title>
    <!-- Bootstrap CSS File  -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<!--NavBar Start-->
<nav class="navbar navbar-default" role="navigation"> 
<div class="container-fluid">
 <div class="navbar-header">
    <img src="img/favicon.ico" width="40" height="40" alt="">&nbsp</div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="#">Project</a></li>
      <li><a href="profile.php">Profile</a></li>
    </ul>
    <div class="col-md-3">
     <form class="navbar-form" action="/search.php" role="search">  
        <div class="input-group">
            <input type="text" class="form-control " placeholder="Search bug">
            <div class="input-group-btn">
            <button id="btn-search" class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
     </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</div>
</nav>
<!--Navbar end-->

<!-- Content Section -->
<div class="container">        
            <table class="table table-bordered table-striped table-hover">
                <thread>
                <tr>
                    <th class="text-center" colspan="6">Projects list
                        <div class="pull-right">
                            <button class="btn btn-success" data-toggle="modal" data-target="#add_new_project_modal">Add New Project</button>
                            </div>
                    </th>
                </tr> 
                </thread>
            </div>
                <tbody>
                        <tr>
                            <th class="col-md-1 text-center">Id</th>
                            <th class="col-md-7 text-center">Project name</th>
                            <th class="col-md-2 text-center">Assignet to</th>
                            <th class="col-md-2 text-center">Options</th>
                        </tr>          
                </tbody>
                </td>
            </table>
        <div class="project_content"></div>  
</div>
</div>
</div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Project -->
<div class="modal fade" id="add_new_project_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Project</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="project_name">Project name</label>
                    <input type="text" id="project_name" placeholder="Project Name" class="form-control"/>
                </div>
                <?php include("project_reader.php"); ?>
                <div class="form-group">
                    <label for="assignet_to">Assignet to you</label>
                    <input type="text" readonly="readonly" id="assignet_to" value="<?php echo htmlspecialchars($user_name);?>" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addProject()">Add Project</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update details -->
<div class="modal fade" id="update_project_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_project_name">Project name</label>
                    <input type="text" id="update_project_name" placeholder="Project name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_assignet_to">Assignet to</label>
                    <input type="text" id="update_assignet_to" placeholder="Assignet to username" class="form-control"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateProjectDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_project_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/project_script.js"></script>
</body>
</html>