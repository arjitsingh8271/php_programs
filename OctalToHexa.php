<!DOCTYPE html>
<html>
<head>
    <title>Octal to Hexadecimal conversion</title>
</head>
<body>
    <h2>Octal to Hexadecimal conversion</h2>
    <form action="" method="post">
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $octal = $_POST['num'];
        echo "<b>($octal)</b>oct =";
        function octalToDecimal($octal) {
            $decimal = 0;
            $length = strlen($octal);
            for ($i = 0; $i < $length; $i++) {
                $decimal += (int)$octal[$i] * pow(8, $length - $i - 1);
            }
            return $decimal;
        }

        function decimalToHexadecimal($decimal) {
            $hexadecimal = '';
            $hexValues = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F');
            while ($decimal > 0) {
                $remainder = $decimal % 16;
                $hexadecimal = $hexValues[$remainder] . $hexadecimal;
                $decimal = (int)($decimal / 16);
            }
            return $hexadecimal;
        }

        $decimal = octalToDecimal($octal);
        $hexadecimal = decimalToHexadecimal($decimal);

        echo "<b>($hexadecimal)</b>hexa";
    }
    ?>
    </body>
</html>
