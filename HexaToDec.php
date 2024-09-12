<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexadecimal to Decimal Converter</title>
</head>
<body>
    <h2>Hexadecimal to Decimal Converter</h2>

    <form action="" method="post">
    <table>
        <tr>
            <td>Enter a number:</td> 
            <td><input type="text" name="num"></td>
        </tr>
       <td><input type="submit" name="submit" value="Submit" /></td>
    </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hex = $_POST['num'];

        function hexToDecimal($hex) {
            $hex = strtoupper($hex);
            $decimal = 0;
            $length = strlen($hex);
            $base = 1;

            for ($i = $length - 1; $i >= 0; $i--) {
                if ($hex[$i] >= '0' && $hex[$i] <= '9') {
                    $decimal += ($hex[$i] - '0') * $base;
                } elseif ($hex[$i] >= 'A' && $hex[$i] <= 'F') {
                    $decimal += (ord($hex[$i]) - ord('A') + 10) * $base;
                } else {
                    echo "<p>Invalid hexadecimal input.</p>";
                    return;
                }
                $base *= 16;
            }

            return $decimal;
        }

        $decimal = hexToDecimal($hex);

        echo "<b>($hex)</b>hexa = <b>($decimal)</b>dec";
    }
    ?>
</body>
</html>
