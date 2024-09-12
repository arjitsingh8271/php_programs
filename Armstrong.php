<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h2>Armstrong Number Checker</h2>
	<form method="post" action="">
		<table>
			<tr>
				<td>Enter a No. :</td>
				<td><input type="number" name="number" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="sub" value="Check" /></td>
			</tr>
		</table>
	</form>
	
	<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        $originalNumber = $number;
        $sum = 0;
        $numDigits = 0;

        // Manually find the number of digits
        $temp = $number;
        while ($temp != 0) {
            $temp = floor($temp / 10);
            $numDigits++;
        }

        // Function to calculate power manually
        function power($base, $exp) {
            $result = 1;
            for ($i = 0; $i < $exp; $i++) {
                $result *= $base;
            }
            return $result;
        }

        // Calculate the sum of digits raised to the power of number of digits
        $temp = $number;
        while ($temp != 0) {
            $digit = $temp % 10;  // Extract last digit
            $sum += power($digit, $numDigits);  // Add digit^numDigits to sum
            $temp = floor($temp / 10);  // Remove the last digit
        }

        // Check if the sum equals the original number
        if ($sum == $originalNumber) {
            echo "<h3>$originalNumber is an Armstrong number.</h3>";
        } else {
            echo "<b>$originalNumber</b> is not an Armstrong number.";
        }
    }
    ?>
</body>
</html>
