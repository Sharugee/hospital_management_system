<?php

include 'connection.php';
 $ID = $_GET['p_id'];
mysqli_query($conn,"DELETE FROM  patient_information WHERE p_id = $Id");

header('location:patient.php');

?>


