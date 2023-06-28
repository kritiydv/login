<?php
session_start();
include("dbconnect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign IN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        
        <form action="login.php" method="POST" onsubmit="return isvalid()">
          <h1 class ="text_center">SIGN IN</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input  class="form-control" id="exampleInputEmail" name="user" aria-describedby="emailHelp" placeholder="Enter username">
    <br>
    
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<script>
  function isvalid(){
    var user=document.form.user.value;
    var pass=document.form.pass.value;
    if(user.length=="" && pass.length=="")
    {
      alert("username and password field is empty!!!");
      return false
    }
    else{
      if(user.length=="")
    {
      alert("username field is empty!!!");
      return false
    }
    if(pass.length=="")
    {
      alert("password field is empty!!!");
      return false
    }

    }
  }
</script>
</body>
</html>