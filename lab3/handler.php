<!DOCTYPE html>
<html>
<head>
    <title>Email Handler</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["user_email"];
        echo "<h1>Email entered on handler page: $email</h1>";
    }
    ?>
</body>
</html>
