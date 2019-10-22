<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../script/function.js" type="text/javascript"> </script>
</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color: white; height:150px;"></div>     
</div>
<div class="row">
    <div class="col-sm-12" style="background-color: white; height:50px;">
   
    </div>     
</div>
<div class="row">
    <div class="col-sm-4" style="background-color: white;"></div>
    <div  class="col-sm-4" style="background-color: #A79797 ; ">
    <form class="form-group" id="sform" onsubmit=" return formvali();" action=" INDEX.php" method="">


user name : <input type="text" id="uname" name="uname" placeholder="Write your user name .."><br>

Password: <input type="password" id="pass" name="pass" placeholder="Write your Password .."><br>
<input type="submit" value="Signup"><a href="INDEX.php"></a> <br>
</form>

    </div>     
</div>
</div>

</body>
</html>
