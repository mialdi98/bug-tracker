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
<title>Bug-tracker-Registration</title>

<!--<body background="img/fon.jpg">-->
  <script src='http://production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script><script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
</head>
<body>

<form class="well form-horizontal" role="form" action="reg.php" method="post"  id="contact_form">
    <?php include("reg_validation.php"); ?>
<fieldset>
<!-- Form Name -->
<legend><center><h2><img src="img/favicon.ico" width="40" height="40" alt="">[Bug-tracker] Registration</h2></center></legend><br>

<!-- Success message -->
<div class="form-group">
    <div class="col-sm-6 col-sm-offset-2">
      <?php echo $result; ?>  
    </div>
  </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
          <input  name="first_name" id="first_name" placeholder="First Name" class="form-control" type="text" value="<?php echo htmlspecialchars($_POST['first_name']);?>">
    </div>
    <?php echo "<p class='text-danger'>$errFirstName</p>"; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
          <input name="last_name" id="last_name" placeholder="Last Name" class="form-control"  type="text" value="<?php echo htmlspecialchars($_POST['last_name']);?>">
    </div>
     <?php echo "<p class='text-danger'>$errLastName</p>"; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group"> 
  <label class="col-md-4 control-label">Role</label>
    <div class="col-md-4 selectContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <select name="roleOf" id="roleOf" class="form-control selectpicker">
            <option value="">Select your Role</option>
            <option>Programmer</option>
            <option>Tester</option>
            <option >Team Leader</option>
          </select>
    </div>
    <?php echo "<p class='text-danger'>$errRoleOf</p>"; ?>
  </div>
</div>
  
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="user_name" id="user_name" placeholder="Username" class="form-control"  type="text" value="<?php echo htmlspecialchars($_POST['user_name']);?>">
    </div>
          <?php echo "<p class='text-danger'>$errUserName</p>"; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input name="user_password" id="user_password" placeholder="Password" class="form-control"  type="password" value="<?php echo htmlspecialchars($_POST['user_password']);?>">
    </div>
          <?php echo "<p class='text-danger'>$errUserPassword</p>"; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control" value="<?php echo htmlspecialchars($_POST['confirm_password']);?>" >
    </div>
          <?php echo "<p class='text-danger'>$errUserPasswordConfirm</p>"; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label for="email" class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input type="email" name="email" id="email" placeholder="example@domain.com" class="form-control" value="<?php echo htmlspecialchars($_POST['email']); ?>">
    </div>
          <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <button type="submit" class="btn btn-warning" name="submit" id="submit">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>
</fieldset>
</form>
</div>
    </div><!-- /.container -->
</div>
<!--<script src="reg.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
</body>
</html>