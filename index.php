<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GLOBAL VARIABLE</title>
</head>
<body>
	<table border="1">
		<?php foreach ($_SERVER as $key => $value) : ?>
			<tr>
				<td><?php echo $key ?></td>
				<td><?php echo $value ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>