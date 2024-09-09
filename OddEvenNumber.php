<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Number Checker</title>
</head>
<body>
    <h2>Even or Odd Number Checker</h2>
    
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if ($number % 2 == 0) {
            echo "<h2><p>$number is an Even number.</p></h2>";
        } 
        else {
            echo "<h2><p>$number is an Odd number.</p></h2>";
        }
    }
    ?>
</body>
</html>
