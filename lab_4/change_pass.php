<html>
<head>
    <title>Password Change Form</title>
    <fieldset>
        <legend> <h1>Change Password</h1></legend>
    <style>
       </style>
    <script>
        function validateForm() {
            var currentPassword = document.forms["passwordChangeForm"]["currentPassword"].value;
            var newPassword = document.forms["passwordChangeForm"]["newPassword"].value;
            var retypeNewPassword = document.forms["passwordChangeForm"]["retypeNewPassword"].value;

            if (currentPassword === newPassword) {
                alert("New password should not be the same as the current password.");
                return false;
            }

            if (newPassword !== retypeNewPassword) {
                alert("New password and retype new password do not match.");
                return false;
            }
        }
    </script>
</head>
<body>
    <form name="passwordChangeForm" action="change_password.php" onsubmit="return validateForm()" method="post">
        <label for="currentPassword">Current Password:</label>
        <input type="password" id="currentPassword" name="currentPassword" required>
        <br><br>

        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" required>
        <br><br>

        <label for="retypeNewPassword">
            <span class="error"><div style="color:red">Retype New Password:</span>
        </label>
        <input type="password" id="retypeNewPassword" name="retypeNewPassword" required>
        <hr>
        <br><br>

        <input type="submit" value="Submit">
    </fieldset>
        
    </form>
</body>
</html>
