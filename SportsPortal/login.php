<?php
session_start();
$db=mysqli_connect("localhost","root","Dattu@3121","SportsPortal") or die('error querying database');

if (isset($_POST['user']) && isset($_POST['user_pass']) && isset($_POST['admin']) && isset($_POST['admin_pass'])) {
	$user=$_POST['user'];
	$user_pass=$_POST['user_pass'];
	$admin=$_POST['admin'];
	$admin_pass = $_POST['admin_pass'];
	$usererror="";
	$adminerror="";



	$query1 = "SELECT * FROM Users WHERE username = '$user' AND password = '$user_pass' ";
	$query2 = "SELECT * FROM Admins WHERE username = '$admin' AND password = '$admin_pass' ";

	$result1 = mysqli_query($db,$query1);
	$result2 = mysqli_query($db,$query2);
	$x1 = mysqli_num_rows($result1);
	$x2 = mysqli_num_rows($result2);
	$x3 = $x1*$x2;
	if($x3==1){
		$_SESSION['user'] = $user;
		$_SESSION['admin']=$admin;
		$current_timestamp = time();
		$current_timestamp_date = date("d F Y H:i:s", $current_timestamp);
		$query3 = "INSERT INTO Register (user,sysadmin,login) VALUES ('".$user."','".$admin."','".$current_timestamp_date."')";
		$result3 = mysqli_query($db,$query3) or die(mysqli_error($db));
		header('Location: http://127.0.0.1/SportsPortal/hello.php');
	}
	else{
		if($x1!=1){
			$usererror = "invalid credentials";
		}
		if($x2!=1){
			$adminerror = "invalid credentials";
		}
	}
}
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
			<br><span><?php if(!empty($usererror)){echo $usererror;}?></span>

			<br><br><br>
			<label>System Admin</label><br>
			<input type="text" name="admin">
			<br>
			<input type="password" name="admin_pass">
			<br><?php if(!empty($adminerror)){echo $adminerror;}?>
			<button value="Submit">Submit</button>
		</form>
	</div>
</body>
</html>