<?php
include 'connection.php';
if(isset($_POST['update'])){
    $pid = $_POST['pid'];
    $name = $_POST['dos'];
    $dob = $_POST['serpro'];
	$gender = $_POST['amount'];
    $contact = $_POST['payst'];
    
    $update = ("UPDATE `patient_invoices` SET `p_id`='dos',`dateOfS`='serpro',`bill_amount`='amount',`payment_s`='payst' WHERE 'p_id' = 'pid'");

 	header("location:patient.php");

	mysqli_query($conn,$update);

    

}
?>