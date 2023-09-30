<!DOCTYPE html>
<html>
<head>
  <title>Staff and Operating Schedules</title>
  <link rel="stylesheet" type="text/css" href="staff.css">
</head>
<header>Staff and Operating Schedules</header>
<body>
   <nav>
    <ul>
      <li><a href="dashbord.php">&larr; &larr; Back to Dashbord</a></li>
    </ul>
  </nav>

  <form method="post" action="staffins.php">
    <input type="hidden" name="id"><br>
    <label >Staff Name:</label>
    <input type="text" name="sname"><br>
    <label>Operating Room Number:</label>
    <input type="text" name="roomno"><br>
    <label>Schedule Date:</label>
    <input type="text" name="schedule"><br>
    <button type="submit" name="save">Save</button>
  </form>
  
  <table>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Staff Name</th>
        <th scope="col">Room Number</th>
        <th scope="col">Schedule Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
    include('connection.php');
    $pic=mysqli_query($conn,"SELECT * FROM staff_operating");
      while ($row=mysqli_fetch_array($pic)){
        echo "
        <tr>
          <td> $row[id]</td>
          <td> $row[staff_name]</td>
          <td> $row[room_number]</td>
          <td> $row[schedule_date]</td>

          <td><a href='delete_staff.php? Id= $row[id]'>Delete</a></td>
          <td><a href='update_Staff.php? id=$row[id]'>Edit</a></td>
        </tr>
        ";
      }
      ?>
    </tbody>
  </table>
</body>
</html>
