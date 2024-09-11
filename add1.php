<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="form" action="add1.php" method="POST">
	<table>
		<tr>
			<td> 1st No. </td>
			<td> <input type="text" name="fn" value=""/> </td>
		</tr>
		<tr>
			<td> 2nd No. </td>
			<td> <input type="text" name="sn" value=""/> </td>
		</tr>
		<tr>
			<td> <input type="submit" name="sub" value="sub1"</td>
			<td> <input type="reset"/> </td>
		</tr>
	</table>
</form>
</body>
</html>


<?php
	if(isset($_REQUEST["sub"]) && $_REQUEST["sub"] != "") {

	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	
	$fnum = $_REQUEST["fn"]; 
	$snum = $_REQUEST["sn"]; 
	
	$sum = $fnum + $snum;
	
	echo "Sum of $fnum & $snum is: $sum";
	}
?>

