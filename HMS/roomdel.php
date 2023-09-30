<?php
include 'connection.php';


// Delete room availability
if (isset($_GET['delete'])) {
  $id = $_GET['id'];
  
  mysqli_query($conn,"DELETE FROM room_availability WHERE id='$id'");
  echo "Done";
  
  //header('location: room.php');
}

?>
