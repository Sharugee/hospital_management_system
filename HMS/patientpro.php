<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arogyalogin_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Initialize variables
$patient_id = 0;
$patient_name = "";
$age = "";
$gender = "";
$address = "";
$update = false;


if (isset($_POST['save'])) {
  $patient_id = $_POST['p_id'];
  $patient_name = $_POST['p_name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];

  $sql = "INSERT INTO patient_information (p_id, p_name, age, gender, address) VALUES ('$patient_id', '$patient_name', '$age', '$gender', '$address')";
  mysqli_query($conn, $sql);
  header('location: patient.php');
}

// Delete room availability
if (isset($_GET['delete'])) {
  $id = $_GET['id'];
  
  $sql = "DELETE FROM patient_information WHERE id=$id";
  mysqli_query($conn, $sql);
  header('location: patient.php');
}

// Retrieve room availability records
$result = mysqli_query($conn, "SELECT * FROM patient_information");



?>


