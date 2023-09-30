<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arogyalogin_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Initialize variables
$id = 0;
$roomNumber = "";
$occupancyStatus = "";
$update = false;

// Delete room availability
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  
  $sql = "DELETE FROM room_availability WHERE id=$id";
  mysqli_query($conn, $sql);
  header('location: room.php');
}

// Retrieve room availability records
$result = mysqli_query($conn, "SELECT * FROM room_availability");
?>


