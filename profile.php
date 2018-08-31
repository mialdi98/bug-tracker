<html>
<head>
<meta charset="utf-8" />

<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="style.css" rel="stylesheet">

<!--<div align="center" style="text-align: center;">
<img src="img/shapka.jpg" alt=""><br></br></div> -->
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 
<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>Bug-tracker-Profile</title>

<!--<body background="img/fon.jpg">-->
  <script src='http://production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script><script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
</head>
<body>

<form class="well form-horizontal" role="form" action="profile.php" method="post"  id="contact_form">
    <?php include("profile_reader.php"); ?>
<fieldset>
<!-- Form Name -->
<legend><center><h2><img src="img/favicon.ico" width="40" height="40" alt="">Bug-tracker Profile</h2></center></legend><br>

<!-- Text output-->
<style>
  .list-group{
      display:inline-block;
 }
</style>
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
      <div class="col-md-7">
<div class="container">
  <h2>List of Projects:</h2>
  <ul class="list-group">
     <li class="list-group-item">
      <label class="control-label">First Name</label>  
      <button type="button" class="btn btn-secondary btn-lg" disabled aria-disabled="true" >
      <i class="glyphicon glyphicon-list-alt"></i></button> 
      <?php echo htmlspecialchars($first_name);?>
    </li>
  </ul>
</div>
</div>
<!--End of colum sctruct-->      
</div>
</div>
</div>
</fieldset>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
</body>
</html>