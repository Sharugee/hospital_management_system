<?php
include 'connection.php';


// Save room availability
if (isset($_POST['save'])) {
  $roomNumber = $_POST['room_number'];
  $occupancyStatus = $_POST['occupancy_status'];
  
  $sql = "INSERT INTO room_availability (room_number, occupancy_status) VALUES ('$roomNumber', '$occupancyStatus')";
  mysqli_query($conn, $sql);
  header('location: room.php');
}

?>