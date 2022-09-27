<?php
include('configuration.php'); //using database connection file here

$id = $_GET['id']; //get id through query string

$move = mysqli_query($db, "INSERT INTO past SELECT * FROM current WHERE reservation_id=".$id); //move query
$deleted = mysqli_query($db, "DELETE FROM current WHERE reservation_id=".$id); // delete query

if($deleted)
{
  $db->close(); //close connection
  header("location:reservations.php"); //redirects to reservations page
  echo "Action done successfully";
  exit;
} 
else 
{
  echo "Error deleting record: " . $db->error;
  echo mysqli_connect_error();
}

$db->close();
?>