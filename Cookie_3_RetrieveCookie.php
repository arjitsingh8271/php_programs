<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Cookie Example</title>
</head>
<body>
    <h2>Retrieve Your Cookie</h2>

    <?php
    if (isset($_COOKIE['user_name'])) {
        $name = $_COOKIE['user_name'];
        echo "<p>Welcome back, $name!</p>";
    } else {
        echo "<p>No cookie found. Please set the cookie first.</p>";
    }
    ?>
</body>
</html>
