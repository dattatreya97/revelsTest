<?php
session_start();
$db=mysqli_connect("localhost","root","Dattu@3121","SportsPortal") or die('error querying database');
$current_timestamp = time();
if (isset($_SESSION['user']) && isset($_SESSION['admin'])) {
	$user=$_SESSION['user'];
	$admin = $_SESSION['admin'];
	$current_timestamp_date = date("d F Y H:i:s", $current_timestamp);
	$query3 = "UPDATE Register SET logout='$current_timestamp_date' WHERE user='$user' AND sysadmin = '$admin'";
	$result3 = mysqli_query($db,$query3) or die(mysqli_error($db));
	
	header('Location: http://127.0.0.1/SportsPortal/login.php');
	exit();
}
session_unset();
	session_destroy();
?>