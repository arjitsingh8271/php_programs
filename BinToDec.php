<!DOCTYPE html>
<html>
<head>
    <title>Binary to Decimal conversion</title>
</head>
<body>
    <h2>Binary to Decimal conversion</h2>
    <form name="BinToDec" action="BinToDec.php" method="post">
	<table>
        <tr>
            <td>Enter the number:</td> 
            <td><input type="text" name="num"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit" /></td>
        </tr>
    </table>
	</form>

    <?php
    if (isset($_POST['submit'])) {
        $binary = $_POST['nj'];
        
        function binaryToDecimal($binary) {
            $decimal = 0;
            $length = strlen($binary);
            
            for ($i = 0; $i < $length; $i++) {
                
                $digit = $binary[$i];
                
                $decimal += $digit * pow(2, $length - $i - 1);
            }
            
            return $decimal;
        }

        $decimalResult = binaryToDecimal($binary);
        echo "<b>($binary)</b>bin = <b>($decimalResult)</b>dec";
    }
    ?>
</body>
</html>
