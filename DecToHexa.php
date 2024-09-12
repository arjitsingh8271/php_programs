<!DOCTYPE html>
<html>
<head>
    <title> Decimal to Hexadecimal conversion</title>
</head>
<body>
    <h2>Decmial to Hexadecimal Conversion</h2>
    <form name="DecToHexa" action="DecToHexa.php" method="post">
	<table>
        <tr>
            <td>Enter a number:</td> 
            <td><input type="text" name="num"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit" /></td>
        </tr>
    </table>
	</form>
    <?php
    if (isset($_POST['submit'])) {
        $decimal = $_POST['num'];

        function decimalToHexadecimal($decimal) {
            $hexadecimal = "";
            $digits = "0123456789ABCDEF";
            
            if ($decimal == 0) {
                return "0";
            }

            while ($decimal > 0) {
                $remainder = $decimal % 16;
                $hexadecimal = $digits[$remainder] . $hexadecimal;
                $decimal = intdiv($decimal, 16);
            }

            return $hexadecimal;
        }

        $hexadecimal = decimalToHexadecimal($decimal);

        echo "<b>($decimal)</b>dec = <b>($hexadecimal)</b>hexa";
    }
    ?>
    </body>
</html>
