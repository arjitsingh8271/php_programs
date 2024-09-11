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
	if(isset($_REQUEST["sub"]) && $_REQUEST["sub"] != "") {
		$num = $_REQUEST["number"];
		$temp = $num;
		$sum = 0;
		$digit = 0;
		
		while($num != 0) {
			$num = ($num / 10);
			$digit++;
		}

		// while($num != 0) {
		// 	$digit = $num % 10;
		// 	$sum += $digit * $digit * $digit;
		// 	$num = ($num / 10);
		// }

		for ($i=0; $i<$digit ; $i++) { 
			$sum *= $digit;
		}
		
		if($temp == $sum)
			echo "<b>$temp</b> is a Armstrong number.";
		else
			echo "<b>$temp</b> is not a Armstrong number.";
		
	}
	?>
</body>
</html>
