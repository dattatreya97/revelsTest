<?php 
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div>

	<form action="login.php" method="POST">
		<label>User</label><br>
		<input type="text" name="user">
		<br>
		<input type="password" name="user_pass">

		<br><br><br>
		<label>System Admin</label><br>
		<input type="text" name="admin">
		<br>
		<input type="password" name="admin_pass">
		<br>
		<button value="Submit">Submit</button>
	</form>
</div>
</body>
</html>