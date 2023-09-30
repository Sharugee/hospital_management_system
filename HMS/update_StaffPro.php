<?php
include 'connection.php';

if(isset($_POST['update']))
{
    $ID = $_POST['id'];
    $staffName = $_POST['sname'];
    $roomNumber = $_POST['roomno'];
    $scheduleDate = $_POST['schedule'];

    mysqli_query($conn,"UPDATE staff_operating SET staff_name='$staffName',room_number='$roomNumber',schedule_date='$scheduleDate', WHERE id = '$ID'" );

    header("location:staff.php");
    
}
?>