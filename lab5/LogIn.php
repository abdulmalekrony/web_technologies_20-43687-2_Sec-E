<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOG IN</title>
    </head>
    <body>
        <table border="1" cellspacing="0" height="100%" width="100%">
            <tr>
                <td>
                    <img src="xcompany.jpeg" alt="X Company Logo">
                    <section style="text-align: right;">

                        <a href="PublicHome.php">Home</a> <b>|</b>
                        <a href="LogIn.php">LogIn</a> <b>|</b>
                        <a href="Registration.php">Registration</a>&nbsp

                    </section>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 50px;">
                    <form method="post" action="LogInCheck.php" enctype="">
                        <fieldset>
                            <legend><b>LOG IN</b></legend>
                            User Name : <input type="text" name="username" value=""><br>
                            Password &nbsp&nbsp : <input type="password" name="password" value=""><br>
                            <hr>
                            <input type="checkbox" name="rememberMe" value="RememberMe">Remember Me<br> <br>
                            <input type="submit" name="submit" value="Submit">&nbsp&nbsp
                            <a href="ForgetPassword.php">Forget Password?</a>
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 20px;">
                <center>Copyright © 2017</center>
                </td>
            </tr>
        </table>
    </body>
</html>
