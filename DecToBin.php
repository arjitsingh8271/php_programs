<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h2>Decimal to Binary Conversion</h2>
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
		$dec = $num;
		$bin = 0;
		$i = 1;
		
		while($dec != 0) {
			$bin += ($dec % 2) * $i;
			$dec = $dec / 2;
			$i = $i * 10;
		}
		echo "<b>$num</b>  to <b>$bin</b>";
		
	}
	?>
</body>
</html>
