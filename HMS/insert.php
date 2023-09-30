<?php
// include db connection
include 'connection.php';

if(isset($_POST['Save'])){
    $pname = $_POST['pname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $add = $_POST['address'];
 

    // insert data

    $insert="INSERT INTO patient_information(p_name,age,gender,address)VALUES('$pname','$age','$gender','$add')";
    mysqli_query($conn,$insert);
    header('location:patient.php');

}

?>