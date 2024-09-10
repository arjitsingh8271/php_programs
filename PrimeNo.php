<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prime Number</title>
</head>
<body>
	<h2>Prime Number Checker</h2>
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
		$isPrime = true;

		if($num < 2) {
			$isPrime = false;
		}
		else {
			for ($i=2; $i*$i <= $num ; $i++) { 
				if($num % $i == 0) {
					$isPrime = false;
					break;
				}
			}
			
		}

		if($isPrime) {
			echo "<p><b>$num</b> is a prime number.</p>";
		}
		else {
			echo "<p><b>$num</b> is not a prime number.</p>";
		}
	}
	?>

</body>
</html>