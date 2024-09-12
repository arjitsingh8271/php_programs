<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octal to Decimal Converter</title>
</head>
<body>
    <h2>Octal to Decimal Converter</h2>

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
        $octal = $_POST['num'];

        function octalToDecimal($octal) {
            $decimal = 0;
            $length = strlen($octal);
            $base = 1;

            for ($i = $length - 1; $i >= 0; $i--) {
                if ($octal[$i] >= '0' && $octal[$i] <= '7') {
                    $decimal += ($octal[$i] - '0') * $base;
                } else {
                    echo "<p>Invalid octal input.</p>";
                    return;
                }
                $base *= 8;
            }

            return $decimal;
        }

        $decimal = octalToDecimal($octal);

        echo "<b>($octal)</b>oct = <b>($decimal)</b>dec";
    }
    ?>
</body>
</html>
