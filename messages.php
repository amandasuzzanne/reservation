<?php
   include('configuration.php');
   session_start();
   if (empty($_SESSION['login_user'])) header("location:mnglogin.php");
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($db,"select username from manager where username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['username'];
   if(!isset($_SESSION['login_user'])){
      header("location:mnglogin.php");
   }
?>

<!DOCTYPE html>
<html>
<head>

<title>MESSAGES</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
	body{background-image: url("photos/background.png");
    background-color: crimson; /* used if the image is unavailable */}
   .container{margin-top:3%;}
</style>
</head>

<body>
<div class="container">

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<p> 
<a href="reservations.php"><button class="btn btn-dark me-md-2">reservations</button><a>
<a href="mnglogout.php"><button class="btn btn-dark">log out</button><a>
</p>
</div>

<h3>Messages</h3>

<div class="row mb-4">
</div>

<table class="table table-dark table-striped table-hover table-bordered">
<tr> <th>Name</th> <th>Email</th> <th>Message</th></tr>

<?php
	$str = '';
    $sql = "SELECT * FROM message";
    $result = mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);

    if ($count<0) $str .= "<tr><td colspan='5'><span class='alert alert-danger'>No reservations found.</span></td></tr>";
    else
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
    $str .= "<tr>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['message']."</td>
    </tr>";
    }
	echo $str;
?>

</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>