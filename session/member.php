<?php 

session_start();
if ($_SESSION['login'] !== true)
{
	header("Location: /session/login.php");
	exit();
}

echo "Hello " . $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MEMBER || SESSION</title>
</head>
<body>
	<br>
	<a href="/session/logout.php">Logout</a>
</body>
</html>