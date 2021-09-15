<?php
session_start();
?>
<html>

<head>

</head>

<body>
	<form name="login_form" method="POST">
		Email:<input type='email' name='login'><br>
		<input type='submit' name='submit' value='Submit'>
	</form>

	<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["login_id"] = $_POST['login'];
		header("location:home.php");
	}
	?>

</body>

</html>