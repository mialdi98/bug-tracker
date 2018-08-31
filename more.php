<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Bug-tracker Project bug</title>
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
</style>
</head>
<body>
<!--NavBar Start-->
<nav class="navbar navbar-default" role="navigation"> 
<div class="container-fluid">
 <div class="navbar-header">
    <img src="img/favicon.ico" width="40" height="40" alt="">&nbsp</div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="project.php">Project</a></li>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>