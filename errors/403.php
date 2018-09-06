<?php require ("../ajax/authorization.php");
if(isset( $_POST['logout'])) {if(isset($_SESSION['id'])){unset($_SESSION['id']);header('location:'.'index.php'); exit;}} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Bug-tracker Project bug</title>
    <!-- Bootstrap CSS File  -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style type="text/css">
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
      <li ><a href="../index.php">Home</a></li>
      <?php //if user login 
      if(isset( $_POST['logout'])) {if(isset($_SESSION['id'])){unset($_SESSION['id']);}} 
      if(isset($_SESSION["id"])) {?>
      <li><a href="../project.php">Project</a></li>
      <li><a href="../profile.php">Profile</a></li>
    </ul>
    
      <?php }else {//if user not login?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      
          
      <?php } ?>
    </ul>
</div>
</nav>
<!--Navbar end-->

<!-- Content Section -->

<div class="container">        
<div class="jumbotron">
  <h1 class="display-4">ERROR 403</h1>
  <p class="lead">Forbidden</p>
  <p class="lead">The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort.</p>
</div>

</div>
<!-- /Content Section -->
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
<script type="text/javascript" src="../js/login_script.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>