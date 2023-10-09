<!DOCTYPE html>
<html>
<head>
    <title>Email Input Form</title>
</head>
<body>
    <form method="post">
        <label for="email">Enter your email:</label>
        <input type="email" id="email" name="user_email" value="<?php echo isset($_POST['user_email']) ? $_POST['user_email'] : ''; ?>" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["user_email"];
        echo "<h1>Email entered on current page: $email</h1>";
    }
    ?>
</body>
</html>

