<?php require ("ajax/authorization.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Bug-tracker More</title>
    <!-- Bootstrap CSS File  -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
.just-padding {
  padding: 15px;
}

.list-group.list-group-root {
  padding: 0;
  overflow: hidden;
}

.list-group.list-group-root .list-group {
  margin-bottom: 0;
}

.list-group.list-group-root .list-group-item {
  border-radius: 0;
  border-width: 1px 0 0 0;
}

.list-group.list-group-root > .list-group-item:first-child {
  border-top-width: 0;
}

.list-group.list-group-root > .list-group > .list-group-item {
  padding-left: 30px;
}

.list-group.list-group-root > .list-group > .list-group > .list-group-item {
  padding-left: 45px;
}

.centered-modal.in {
    display: flex !important;
}
.centered-modal .modal-dialog {
    margin: auto;
}
</style>
</head>
<body>

<!--NavBar Start-->
<nav class="navbar navbar-default" role="navigation"> 
<div class="container-fluid">
 <div class="navbar-header">
    <img src="img/favicon.ico" width="40" height="40" alt="">&nbsp</div>
    <ul class="nav navbar-nav ">
      <li class="active"><a href="index.php">Home</a></li>
      <?php //if user login 
      if(isset( $_POST['logout'])) {if(isset($_SESSION['id'])){unset($_SESSION['id']);}} 
      if(isset($_SESSION["id"])) {?>
      <li><a href="project.php">Project</a></li>
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

<div class="container">    
<h1>Structure of site</h1>    
<div class="just-padding">
<div class="list-group list-group-root well">
  
  <p class="list-group-item"><strong>Project page</strong></p>
  <div class="list-group"> 
    <div class="list-group">
      <p class="list-group-item"><strong>Project page</strong> have list of Projects.</p>
      <p class="list-group-item"><strong>Bugs of Project</strong> have list of bugs.</p>
      <p class="list-group-item"><strong>Bug page</strong> have all information about bug.</p>
    </div>
    </div>
      <p class="list-group-item"><strong>Profile page</strong></p>
  <div class="list-group"> 
    <div class="list-group">
      <p class="list-group-item"><strong>Profile page</strong> have all inforpation about user.</p>
    </div>
    </div>
     <p class="list-group-item"><strong>Registration page</strong></p>
  <div class="list-group"> 
    <div class="list-group">
      <p class="list-group-item"><strong>Registration page</strong>is the page where you can register yourself.</p>
    </div>
    </div>
  </div>  
</div>
</div>
</div>
<!--Content End-->

<!-- Modal - Login Form -->
<div class="modal fade bd-example-modal-lg centered-modal"" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close pull-right" id="close_login_modal_button" name="close_login_modal_button" data-dismiss="modal" ><i class="glyphicon glyphicon-remove "></i></button>
              <form action="" method="post" id="frmLogin">
                <div class="text-danger"><?php if(isset($ErrorMsg)) { echo $ErrorMsg; } ?></div>
                <div class="form-group">
                    <label for="user_name"><span class="glyphicon glyphicon glyphicon-user"></span> Username</label>    
                    <input type="text" name="user_name" id="user_name" class="form-control"  placeholder="Username" value="<?php if(isset($_COOKIE["user_name"])) { echo $_COOKIE["user_name"]; } ?>"/>
                </div>
                <div class="form-group">
                    <label for="user_password"><span class="glyphicon glyphicon-lock"></span> Password</label>    
                    <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password"  value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" />
                </div>
                <div class="field-group">
                     <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["user_name"])) { ?> checked <?php } ?> />
                     <label for="remember">Remember me</label>
                     <button type="submit" name="login" class="btn btn-success pull-right" value="Login"><i class="glyphicon glyphicon-ok "></i> Login</button>
                </div>
              </form>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Custom JS file -->
<script type="text/javascript" src="js/login_script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>