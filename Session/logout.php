<?php
session_start();
if (isset($_SESSION['login_id'])) {
$id = $_SESSION["login_id"];
	unset($_SESSION['count']);
	session_destroy();
	echo "Session destroyed";
}else{
	echo "Please login<br>";
	echo "<a href=" . "p5.php" . ">Login</a>";
}
?>