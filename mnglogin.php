<?php
require("configuration.php");//connect to the database
session_start(); //session to manage

//login and logout operations
   $error="";
      if($_SERVER["REQUEST_METHOD"] == "POST") 
      {
         //username and password sent from form using POST method
         $myusername = mysqli_real_escape_string($db,$_POST['username']);
         $mypassword = mysqli_real_escape_string($db,$_POST['password']);
         $mypassword = md5($mypassword); //encrypt password
         $sql = "SELECT user_id FROM manager WHERE username = '".$myusername."' and password = '".$mypassword."'";
         $result = mysqli_query($db,$sql);
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         $count = mysqli_num_rows($result);
         
         if($count == 1) 
         { //login successful
            $_SESSION['login_user'] = $myusername;
            header("location: reservations.php");
         }else 
         {
            $error = "Your Login Name or Password is invalid";
         }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>ADMIN LOGIN</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
<h3>Manager Login</h3>

<style>
   body{background-image: url("photos/background.png");
   background-color: crimson; /* used if the image is unavailable */}
   .container{margin-top:3%;}
</style>
</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<div class="row mb-4">
   <label for="inputUsername" class="col-sm-1 col-form-label">Username:</label>
   <div class="col-sm-3">
   <input type="username" class="form-control"  name="username">
   </div>
</div>
<div class="row mb-4">
   <label for="inputPassword" class="col-sm-1 col-form-label">Password:</label>
   <div class="col-sm-3">
   <input type="password" class="form-control" name="password">
   </div>
   
   <div class=""> 
      <?= $error?: $error; ?>
   </div>
</div>

<button type="submit" class="btn btn-dark col-sm-1" name="login" style="margin-left:50";>Sign in</button>

</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>