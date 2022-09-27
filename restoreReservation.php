<?php
include('configuration.php'); // Using database connection file here

$id = $_GET['id']; // get id through query string

$move = mysqli_query($db, "INSERT INTO current SELECT * FROM past WHERE reservation_id=".$id); //move query
$restored = mysqli_query($db, "DELETE FROM past WHERE reservation_id=".$id); // delete query

if($restored)
{
  $db->close(); // Close connection
  header("location:reservations.php"); // redirects to users page
  echo "Record restored successfully";
  exit;
} else 
{
  echo "Error restoring record: " . $db->error;
  echo mysqli_connect_error();
}

$db->close();
?>