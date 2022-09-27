<?php
 include('configuration.php');
  //save form data
  if (!empty($_POST['name']))
  {
      $name =  $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
	
   $stmt = $db->prepare("INSERT INTO message (name, email, message) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $n, $em, $mes);

	// set parameters and execute
	$n = $name;
	$em = $email;
   $mes = $message;
	
	if(!$stmt->execute()) echo "<span style='color:white'>Error while sending message</span>";
	else 
	$stmt->close();
	$db->close(); // Close connection
   
   echo "<span style='color:white'>Message sent successfully</span>";
   header("location:index.php"); // redirects to home page
   exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<p>Please feel free to contact us if you have any questions or concerns</p>
<style>
   body{background-image: url("photos/background.png");
   background-color: crimson; /* used if the image is unavailable */}
   .container{margin-top:3%;}
</style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      
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
   <label for="inputMessage" class="col-sm-1 col-form-label">Message:</label>
   <div class="col-sm-3">
   <input type="text" id="inputMessage" placeholder="Message" name="message" class="form-control" >
   </div>
</div>
	<button type="submit" class="btn btn-dark col-sm-1" name="login">Send</button>
</form>
</div>

<div class="mapouter">
   <div class="gmap_canvas">
      <iframe width="1200" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Java%20House,%20Greenspan%20Mall&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
         <a href="https://www.online-timer.net"></a>
         <br>
         <style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;margin-top:30px;margin-right:auto;margin-left:auto;}</style>
         <a href="https://www.embedgooglemap.net">map for website</a>
         <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style>
   </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>