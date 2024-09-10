<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Palindrome No.</title>
</head>
<body>
	<h2>Palindrome No. Checker</h2>
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
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$num = $_POST['number'];
		$temp = $num;
		$digit = 0;
		$rev = 0;

		while($temp > 0) {
			$digit = $temp % 10;
			$rev = ($rev * 10) + $digit;
			$temp = (int)($temp / 10);
		}

		if($num == $rev) {
			echo "<p><b>$num</b> is a palindrome number.</p>";
		}
		else {
			echo "<p><b>$num</b> is not a palindrome number.</p>";
		}


		// OR

		// $reverse = strrev($number);
        // if ($number == $reverse) {
        //     echo "<p>$number is a palindrome.</p>";
        // } else {
        //     echo "<p>$number is not a palindrome.</p>";
        // }
	}
	?>

</body>
</html>