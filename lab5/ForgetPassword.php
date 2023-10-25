<?php

   require_once('sessionCheck.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORGET PASSWORD</title>
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

                    <form method="POST" action="" enctype="">
                        <fieldset>

                            <legend ><b>FORGET PASSWORD</b></legend>
                            Enter Email: <input type="email" name="email" placeholder="Enter your Email" ><br>
                            <hr>
                            <input type="submit" name="" value="Submit" />

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
