<?php
session_start();
if (isset($_SESSION['count'])) {

	$_SESSION['count'] = $_SESSION['count'] + 1;
} else {
	$_SESSION['count'] = 1;
}
?>

<html>

<body>
	<?php
	if (isset($_SESSION['login_id'])) {
		$id = $_SESSION["login_id"];
		echo "Email ";
		echo $id;
		$count = $_SESSION['count'];
		echo "<h2>You have visited this page $count times in this session</h2>";
		echo "<br><a href=" . "logout.php" . ">Logout</a>";
	} else {
		echo "Please login<br>";
		echo "<a href=" . "p5.php" . ">Login</a>";
	}
	?>

</body>

</html>