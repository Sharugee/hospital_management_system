<?php
include 'connection.php';

if(isset($_POST['update']))
{
    $ID = $_POST['Id'];
    $roomno = $_POST['Roomno'];
    $ocs = $_POST['ocs'];

    mysqli_query($conn,"UPDATE room_availability SET room_number='$roomno',occupancy_status='$ocs' WHERE id='$ID'");


    header("location:Room.php");
    
}
?>