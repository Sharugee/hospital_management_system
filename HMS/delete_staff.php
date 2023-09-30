<?php

include 'connection.php';
 $staffId = $_GET['Id'];
mysqli_query($conn,"DELETE FROM staff_operating WHERE id = $staffId");

header("location:staff.php");

?>


