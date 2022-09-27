<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST | PHP</title>
</head>
<body>
	<table border="1" cellpadding="8">
		<tr>
			<th>Name</th>
			<td><?php echo $_POST['name'] ?></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><?php echo $_POST['pass'] ?></td>
		</tr>
	</table>
</body>
</html>