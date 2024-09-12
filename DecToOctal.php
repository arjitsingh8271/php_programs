<!DOCTYPE html>
<html>
<head>
    <title> Decimal to Octal conversion</title>
</head>
<body>
    <h2>Decmial to Octal Conversion</h2>
    <form name="DecToOctal" action="DecToOctal.php" method="post">
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimal = intval($_POST['num']);

        function decimalToOctal($decimal) {
            $octal = '';

            while ($decimal > 0) {
                $remainder = $decimal % 8;
                $octal = $remainder . $octal;
                $decimal = intval($decimal / 8);
            }

            return $octal == '' ? '0' : $octal; // If input is 0, return '0'
        }

        $octal = decimalToOctal($decimal);

        echo "<b>($decimal)</b>dec = <b>($octal)</b>oct";
    }
    ?>
    </body>
</html>
