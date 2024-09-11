<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reverse a Number</title>
</head>
<body>
	<h2>Reverse a number</h2>
	<form method="POST" action="">
		<table>
			<tr>
				<td>Enter a No. :</td>
				<td><input type="number" name="number"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="sub"></td>
			</tr>
		</table>
	</form>

	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$num = $_POST['number'];
		$temp = $num;
		$digit = 0;
		$rev = 0;

		while($num > 0) {
			$digit = $num % 10;
			$rev = ($rev * 10) + $digit;
			$num = ($num / 10);
		}

		echo "<p>Reverse of <b>$temp</b> is <b>$rev</b></p>";


		// OR
		// $rev = strrev($num);
		// echo "<p>Reverse of <b>$num</b> is <b>$rev</b></p>";
	}
	?>

</body>
</html>