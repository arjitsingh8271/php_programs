<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr>
				<td>Roll</td>
				<td>:</td>
				<td><input type="number" name="RollNo"></td>
			</tr>
			<tr>
				<td>Dept</td>
				<td>:</td>
				<td><input type="text" name="Dept"></td>
			</tr>
			<tr>
				<td>Mobile No.</td>
				<td>:</td>
				<td><input type="number" name="MobNo"></td>
			</tr>
			<tr>
				<td>City</td>
				<td>:</td>
				<td><input type="text" name="City"></td>
			</tr>
			<tr>
				<td>State</td>
				<td>:</td>
				<td><input type="text" name="State"></td>
			</tr>
			<tr>
				<td><button type="submit" name="sub">Submit</td>
			</tr>
		</table>
	</form>

	<?php
	// if(isset($_REQUEST['sub']) && $_REQUEST['sub'] != "") {
		echo "<pre>";
		print_r($_REQUEST);
		echo "</pre>";
	//}

	?>

</body>
</html>