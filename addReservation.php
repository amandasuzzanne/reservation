<?php
include('configuration.php'); //using database connection file here

  //save form data
   if (!empty($_POST['name']))
   {
      $name =  $_POST['name'];
      $email = $_POST['email'];
      $people = $_POST['people'];
      $date = $_POST['date'];
      $time = $_POST['time'];
      $setting = $_POST['setting'];
      $message = $_POST['message'];
	
   $stmt = $db->prepare("INSERT INTO current (name, email, people, date, time, setting, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("sssssss", $n, $em, $ppl, $d, $t, $set, $mes);

	//set parameters and execute
	   $n = $name;
	   $em = $email;
      $ppl = $people;
      $d = $date;
      $t = $time;
      $set = $setting;
      $mes = $message;
	
	if(!$stmt->execute()) echo "<span style='color:red'>Error while making reservation</span>";
	   else 
	      $stmt->close();
	      $db->close(); // Close connection

   header("location:index.php"); // redirects to home page
   echo "Reservation made successfully";
   exit;
   }
 
?>

<!DOCTYPE html>
<html>
<head>
<title>Add User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<h3>Make a Reservation</h3>

<style>
   body{background-image: url("photos/background.png");
    background-color: crimson; /* used if the image is unavailable */}
   .container{margin-top:3%;}
</style>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<!-- Reservation Modal -->
<div class="row mb-4">
   <label for="inputName" class="col-sm-1 col-form-label">Name:</label>
   <div class="col-sm-3">
   <input type="text" id="inputName" placeholder="Your Name" name="name" class="form-control">
   </div>
</div>
<div class="row mb-4">
   <label for="inputEmail" class="col-sm-1 col-form-label">Email:</label>
   <div class="col-sm-3">
   <input type="text" id="inputEmail" placeholder="Your Email" name="email" class="form-control" >
   </div>
</div>
<div class="row mb-4">
   <label for="inputPeople" class="col-sm-1 col-form-label">People:</label>
   <div class="col-sm-3">
   <input type="text" id="inputPeople" placeholder="Enter Number of People" name="people" class="form-control" >
   </div>
</div>
<div class="row mb-4">
   <label for="inputDate" class="col-sm-1 col-form-label">Date:</label>
   <div class="col-sm-3">
   <input type="date" id="inputDate" placeholder="Date" name="date" class="form-control" >
   </div>
</div>
<div class="row mb-4">
   <label for="inputTime" class="col-sm-1 col-form-label">Time:</label>
   <div class="col-sm-3">
   <input type="time" id="inputTime" placeholder="Time" name="time" class="form-control" >
   </div>
</div>
<div class="row mb-4">
   <label for="inputSetting" class="col-sm-1 col-form-label">Setting:</label>
   <div class="col-sm-3">
   <input type="text" id="inputSetting" placeholder="Indoor / Outdoor Setting" name="setting" class="form-control" >
   </div>
</div>
<div class="row mb-4">
   <label for="inputMessage" class="col-sm-1 col-form-label">Message:</label>
   <div class="col-sm-3">
   <input type="text" id="inputMessage" placeholder="Message / Special Request" name="message" class="form-control" >
   </div>
</div>
	<button type="submit" class="btn btn-dark col-sm-1" name="login">Reserve</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>