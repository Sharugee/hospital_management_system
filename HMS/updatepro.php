<?php
include 'connection.php';
if(isset($_POST['Update']))
{
    $ID = $_POST['Id'];
    $p_name = $_POST['pname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    mysqli_query($conn,"UPDATE patient_information SET p_name='$p_name',age='$age',gender='$gender',address='$address' WHERE p_id = '$ID' ");
    header("location:patient.php");


}
?>