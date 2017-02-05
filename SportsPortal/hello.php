<?php
session_start();
$user = "";
if (isset($_SESSION['user'])) {
	$user = $user.$_SESSION['user'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
<p>Hello
<?php echo $user;
?></p>
<form action="logout.php" method="POST">
	<button value="Submit">Logout</button>
</form>
</body>
</html>