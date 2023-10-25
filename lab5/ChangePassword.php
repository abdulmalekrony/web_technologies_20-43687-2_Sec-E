<?php 
    require_once('sessionCheck.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CHANGE PASSWORD</title>
    </head>
    <body>
        <table border="1" cellspacing="0" height="100%" width="100%">
            <tr>
                <td colspan="2">
                    <img src="xcompany.jpeg" alt="X Company Logo">
                    <section style="text-align: right;">
                        Logged in as <a href="LID.php">Bob</a> <b>|</b>
                        <a href="LogOut.php">LogOut</a>&nbsp
                    </section>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp&nbsp&nbsp
                    <b>Account</b>
                    <hr>
                    <ul>
                      <li> <a href="LID.php">Dashboard</a> </li>
                      <li> <a href="ViewProfile.php">View Profile</a> </li>
                      <li> <a href="EditProfile.php">Edit Profile</a> </li>
                      <li> <a href="CPP.php">Change Profile Picture</a> </li>
                      <li> <a href="ChangePassword.php">Change Password</a> </li>
                      <li> <a href="LogOut.php">Logout</a> </li> 
                    </ul>
                </td>

                <td colspan = "1">
                    <form method="post" action="" enctype="">
                        <fieldset>
                            <legend><b>CHANGE PASSWORD</b></legend>
                            Current Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : 
                            <input type="password" name="CurrentPassword" value="" /><br>
                            New Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp : 
                            <input type="password" name="NewPassword" value="" /><br>
                            Retype New Password&nbsp&nbsp&nbsp : 
                            <input type="password" name="retypeNewPass" value="" /><br><hr>
                            <input type="submit" name="submit" value="Submit" />
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
