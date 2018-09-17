<?php require ("ajax/authorization.php");
if(isset( $_POST['logout'])) {if(isset($_SESSION['id'])){unset($_SESSION['id']);header('location:'.'index.php'); exit;}} 
include("profile_reader.php"); ?>

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
    <ul class="nav navbar-nav ">
      <li><a href="index.php">Home</a></li>
      <?php //if user login 
      if(isset( $_POST['logout'])) {if(isset($_SESSION['id'])){unset($_SESSION['id']);}} 
      if(isset($_SESSION["id"])) {?>
      <li ><a href="project.php">Project</a></li>
      <li class="active"><a href="profile.php">Profile</a></li>
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

<style>
  .list-group{
      display:inline-block;
 }
</style>

<!--Content Start-->
<!--Start of colum sctruct--> 
<div class="frm">
  <div class="form-group">

<div class="col-md-3 container">
  <h2>Profile info</h2>
  <ul class="list-group">
     <li class="list-group-item">
      <label class="control-label">First Name</label>  
      <button type="button" class="btn btn-secondary btn-lg" disabled aria-disabled="true" >
      <i class="glyphicon glyphicon-list-alt"></i></button> 
      <?php echo htmlspecialchars($first_name);?>
    </li>
    <li class="list-group-item">
      <label class="control-label">Last Name</label>  
      <button type="button" class="btn btn-secondary btn-lg" disabled aria-disabled="true" >
      <i class="glyphicon glyphicon-list-alt"></i></button> 
      <?php echo htmlspecialchars($last_name);?>
    </li>
    <li class="list-group-item">
      <label class="control-label">Role &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>  
      <button type="button" class="btn btn-secondary btn-lg" disabled aria-disabled="true" >
      <i class="glyphicon glyphicon-list"></i></button> 
      <?php echo htmlspecialchars($roleOf);?>
    </li>
    <li class="list-group-item">
      <label class="control-label">Username </label>  
      <button type="button" class="btn btn-secondary btn-lg" disabled aria-disabled="true" >
      <i class="glyphicon glyphicon-user"></i></button> 
      <?php echo htmlspecialchars($user_name);?>
      </li>
    <li class="list-group-item">
      <label class="control-label">E-Mail &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label> 
      <button type="button" class="btn btn-secondary btn-lg" disabled aria-disabled="true" >
      <i class="glyphicon glyphicon-envelope"></i></button> 
      <?php echo htmlspecialchars($email);?>
    </li>
  </ul>
</div>

<!--End of colum sctruct-->      
</div>
</div>
</div>
<!--Content Start-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
</body>
</html>