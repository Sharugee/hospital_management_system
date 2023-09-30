<!DOCTYPE html>
<html>
<head>
<title>Arogya Health Care Hospital Login</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container">
<h1>Arogya Health Care Hospital Login</h1>
<form action="logindb.php" method="post">
	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
	<label>Username</label><br>
<input type="text" name="username" placeholder="Username">
<label>Password</label><br>
<input type="password" name="password" placeholder="Password"><br><br>
<button type="submit">Login</button><br><br>
</form>
<p>Forgot your password? <a href="#">Click here</a>.</p>
</div>
</body>
</html>
