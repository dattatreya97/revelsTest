<?php
session_start();
$db=mysqli_connect("localhost","root","Dattu@3121","SportsPortal") or die('error querying database');
//$current_timestamp = time();
if (isset($_SESSION['user']) && isset($_SESSION['admin'])) {
	echo "hello";
	$user=$_SESSION['user'];
	$admin = $_SESSION['admin'];
	$query3 = "UPDATE Register SET logout=now() WHERE user='$user' AND sysadmin = '$admin' ORDER BY login DESC LIMIT 1";
	$result3 = mysqli_query($db,$query3) or die(mysqli_error($db));
	header('Location: http://127.0.0.1/SportsPortal/index.php');
	exit();
	session_unset();
	session_destroy();
}
session_unset();
session_destroy();
?>
