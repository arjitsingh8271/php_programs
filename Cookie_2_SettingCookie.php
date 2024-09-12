<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Example</title>
</head>
<body>
    <h2>Set Your Name in a Cookie</h2>

    <form method="POST" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Set Cookie</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        
        // Set a cookie that expires in 1 day (86400 seconds)
        setcookie("user_name", $name, time() + 60, "/");

        echo "<p>Cookie has been set for 1 day. Refresh the page or go to the next page to retrieve it.</p>";
    }
    ?>
</body>
</html>
