<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Bug-tracker Project bug</title>
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
      <li><a href="../index.php">Home</a></li>
      <li><a href="../project.php">Project</a></li>
      <li><a href="../profile.php">Profile</a></li>
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
      <li><a href="../reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>