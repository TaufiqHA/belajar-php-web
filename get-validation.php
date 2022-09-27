<?php 

if (!isset($_GET['name']) || $_GET['name'] == "") {
	http_response_code(400);
	echo 'Name is required';
	exit();
}

$say = "Hello " . htmlspecialchars($_GET['name']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET VALIDATION</title>
</head>
<body>
	<p><?php echo $say ?></p>
</body>
</html>