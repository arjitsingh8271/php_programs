<!DOCTYPE html>
<html>
<head>
    <title>Decimal to Binary conversion</title>
</head>
<body>
	<h2>Decimal to Binary conversion</h2>
    <form name="DecToBin" action="DecToBin.php" method="post">
	<table>
        <tr>
        	<td>Enter a number:</td> 
        	<td><input type="text" name="num"></td>
        </tr>
       <td><input type="submit" name="submit" value="Submit" /></td>
    </table>
	</form>

    <?php
    if (isset($_POST['submit'])) {

        $n = intval($_POST['num']);
		function decimaltobinary($num) {
            $binary = '';
            while ($num > 0) {
                $binary = ($num % 2) . $binary;
                $num = (int)($num / 2);
            }
            return $binary ? $binary : '0';
        }

        $binaryResult = decimaltobinary($n);
        echo "<b>($n)</b>dec = <b>($binaryResult)</b>bin";
    }
    ?>
</body>
</html>