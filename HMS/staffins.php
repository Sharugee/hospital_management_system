<?php
// include db connection
include 'connection.php';

if(isset($_POST['save']))
{
    $staffid= $_POST['id'];
    $staffName = $_POST['sname'];
    $roomNumber = $_POST['roomno'];
    $scheduleDate = $_POST['schedule'];
     

    // insert data

    $insert="INSERT INTO staff_operating(staff_name,room_number,schedule_date)VALUES('$staffName','$roomNumber','$scheduleDate')"; 
    mysqli_query($conn,$insert);
    header('location:staff.php');
  

}

?>  