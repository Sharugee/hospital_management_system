    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information Form</title>
    <link rel="stylesheet" href="patient.css">
   
</head>
<header>Patient Information</header>
<body>
     <nav>
    <ul>
      <li><a href="dashbord.php">&larr; &larr; Back to Dashbord</a></li>
    </ul>
  </nav>
  <center>
        <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="p_id"><br>
        <label for="">Patient_name:</label>
        <input type="text" name="pname" id="pname"><br>
        <label for="">Age:</label>
        <input type="text" name="age" id=""><br>
        <label for="">Gender:</label>
        <input type="text" name="gender" id=""><br>
        <label for="">Address:</label>
        <input type="text" name="address" id=""><br>
        <button type="submit" name="Save">Save</button>

        </form>
    </div>
        </center>
      
     <!-- fetch data -->

        <div class="container">

        <table class="table">
  <thead>
    <tr>
     <th scope="col">Patient ID</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Invoice</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'connection.php';
        $pic = mysqli_query($conn,"SELECT * FROM patient_information");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[p_id]</td>
                <td>$row[p_name]</td>
                <td>$row[age]</td>
                <td>$row[gender]</td>
                <td>$row[address]</td>
                <td><a href='invoice.php?Id=".$row['p_id']."';? class = 'btn btn-danger'>Invoice</a></td>
               
                <td><a href='patientpro.php? Id= $row[p_id]' class = 'btn btn-danger'>Delete</a></td>
                <td><a href='update_patient.php? Id= $row[p_id]' class = 'btn btn-danger'>Update</a></td>
                <td></td>
                
                
                
            </tr>
            ";
        }
        ?>
</tbody>
</table>
</div>
 <footer>
    <p>&copy; 2023 Arogya Health Care Hospital. All rights reserved.</p>
  </footer>
</body>
</html>