<?php
include 'roompro.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Room Availability Form</title>
  <link rel="stylesheet" type="text/css" href="room.css">
</head>
<body>
  <header>Room Availability Form</header>
    <nav>
      <a href="dashbord.php" class="link">&larr; &larr; Back to Dashbord</a>
  </nav>
  <form method="post" action="roomins.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>Room Number:</label>
    <input type="text" name="room_number" value="<?php echo $roomNumber; ?>">
    <label>Occupancy Status:</label>
    <input type="text" name="occupancy_status" value="<?php echo $occupancyStatus; ?>">
    <?php if ($update == true): ?> 
      <button type="submit" name="Edit">Update</button>
    <?php else: ?>
      <br><br>
      <button type="submit" name="save">Save</button>
    <?php endif ?>
  </form>
    <table>
    <thead>
      <tr>
        <th>Room Number</th>
        <th>Occupancy Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?php echo $row['room_number']; ?></td>
          <td><?php echo $row['occupancy_status']; ?></td>
          <td>
            <a href="roompro.php?delete=<?php echo $row['id']; ?>">Delete</a>
          </td>
          <td><a href="update_Room.php?edit=<?php echo $row['id']; ?>"> Edit</a></td>
          
            

        </tr>
        </tr>
      <?php endwhile ?>
    </tbody>
  </table>
</body>
</html>
