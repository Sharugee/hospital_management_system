<?php
	$uname = $_POST['username'];
	$password = $_POST ['password'];

	//database conn
	$conn = mysqli_connect("localhost","root","","arogyalogin_db");
	if($conn->connect_error) {
		die("Faild to connect : ".$conn->connect_error);	
	} else {
	$stmt = $conn->prepare("select * from users where username = ? ");
	$stmt->bind_param("s",$uname);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if ($stmt_result->num_rows > 0) {
     $data = $stmt_result->fetch_assoc();
     if ($data['password'] === $password) {
     	header("location:dashbord.php");
     }
     } else {
		echo "<h2>Invalid Username or Password</h2>";
	}
}