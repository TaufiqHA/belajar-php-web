<?php 
	
	session_start();

	if (isset($_SESSION['login']))
	{
		if ($_SESSION['login'] == true) {
			header("Location: /session/member.php");
			exit();
		}
	}

	$error = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if ($_POST['name'] == 'taufiq' && $_POST['pass'] == 'malakaji') {
			$_SESSION['login'] = true;
			$_SESSION['username'] = 'taufiq hidayah abdullah';
			header("Location: /session/member.php");
			exit();
		}else {
			$error = 'Login Gagal';
		}
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN | SESSION</title>
</head>
<body>
	<?php if ($error != "") : ?>
		<h3><?php echo $error; ?></h3>
	<?php endif; ?>
	<h2>LOGIN</h2>
	<form action="/session/login.php" method="post">
		<label>
			Name : 
			<input type="text" name="name">
		</label>
		<br>
		<label>
			Password : 
			<input type="text" name="pass">
		</label>
		<br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>