<html>
<head>
    <title>Form Validation</title>
    <fieldset>
        <legend><h2>Login</h2></legend>
    <script>
        function validateForm() {
            var username = document.forms["loginForm"]["username"].value;
            var password = document.forms["loginForm"]["password"].value;

            // Regular expressions for validation
            var usernamePattern = /^[a-zA-Z0-9._-]{2,}$/;
            var passwordPattern = /^(?=.*[@#$%]).{8,}$/;

            if (!username.match(usernamePattern)) {
                alert("Username is invalid. It must contain at least two alphanumeric characters, period, dash, or underscore only.");
                return false;
            }

            if (!password.match(passwordPattern)) {
                alert("Password is invalid. It must be at least 8 characters long and contain at least one of the special characters (@, #, $, %).");
                return false;
            }
        }
    </script>
</head>
<body>
    <form name="loginForm" action="submit.php" onsubmit="return validateForm()" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <hr>
        <br><br>

<input type="checkbox" id="rememberMe" name="rememberMe">
        <label for="rememberMe">Remember Me</label>
        <br><br>

        <a href="forgot_password.html">Forgot Password?</a>&nbsp &nbsp
    <input type="submit" value="Submit">
    </fieldset>
    
    </form>

</body>
</html>
