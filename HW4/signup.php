<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/function.js" type="text/javascript"> </script>
</head>
<body>
  
<div class="container-fluid">

  <div class="row">
    <div class="col-sm-2" style="background-color:#aaaaaa; height: 80px "><img src="img/LogoMakr_61haj6.png" width="200px"   ></div>
      <div class="col-sm-10" style="background-color:#aaaaaa; height: 80px ">
      
  
      <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="INDEX.php"><b>Home</b></a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Women Dress</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a><br>
      <a class="dropdown-item" href="#">Link 2</a><br>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Men Dress</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a><br>
      <a class="dropdown-item" href="#">Link 2</a><br>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Store</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#"><b>About</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="signup.php">Sign up</a>
  </li>
  
</ul>
      
      </div>
    
  </div>
   <div class="col-sm-12" style="background-color:white; height: 40px ">
    </div>
 <div class="row">
 
 <div class="col-sm-2">    </div>

 <div class="col-sm-8">
   <form class="form-group" id="sform" onsubmit=" return formvali();" action=" signup.php" method="post">
     <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label for="name">User Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter your user name" name="uname">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="int" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
    </div>
    
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" >Submit</button>
</form>
     </div>
      <div class="col-sm-2">    </div>

    </div>     
</div>


</body>
</html>
