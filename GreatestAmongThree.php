<html>
<head>
	<title></title>
</head>

<body>
	<h2>Greatest among three Checker</h2>

	<form method="POST" action="">
		<table>
			<tr>
				<td>Enter 1st Number</td>
				<td><input type="number" name="num1"></td>
			</tr>
			<tr>
				<td>Enter 2nd Number</td>
				<td><input type="number" name="num2"></td>
			</tr>
			<tr>
				<td>Enter 3rd Number</td>
				<td><input type="number" name="num3"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit">Find Greatest</button></td>
			</tr>
		</table>
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

		if ($num1 >= $num2 && $num1 >= $num3) {
            echo "<p>The greatest number is: <b>$num1</b></p>";
        } 
        elseif ($num2 >= $num1 && $num2 >= $num3) {
            echo "<p>The greatest number is: <b>$num2</b></p>";
        } 
        else {
            echo "<p>The greatest number is: <b>$num3</b></p>";
        }
	}
	?>
</body>
</html>