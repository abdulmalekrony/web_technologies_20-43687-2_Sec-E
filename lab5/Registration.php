<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST["name"]; // Change "username" to "name"
        $email = $_POST["email"];
        $username = $_POST["username"]; // Change "username" to "username"
        $password = $_POST["password"];
        $confirmPassword = $_POST["Confirmpassword"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
        $dob = $day . '/' . $month . '/' . $year;

        if ($password != $confirmPassword) 
        {
            echo "Please enter the password and confirm password correctly.";
        } 
        else 
        {
            // Store user information in cookies (you might want to use a more secure method)
            setcookie('Name', $name, time() + 3600); 
            setcookie('Email', $email, time() + 3600);
            setcookie('UserName', $username, time() + 3600);
            setcookie('Gender', $gender, time() + 3600);
            setcookie('DOB', $dob, time() + 3600);
            setcookie('Password', $password, time() + 3600);

            // Redirect to the login page
            header("Location: login.php");
            exit;
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTRATION</title>
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
                    <form method="post" action="" enctype="">
                        <fieldset>

                            <legend><b>REGISTRATION</b></legend>
                            Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="text" name="name" value="" /><br>
                            <hr>
                            Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="email" name="email" value="" /><br>
                            <hr>
                            User Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="text" name="username" value="" /><br>
                            <hr>
                            Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="password" name="password" value="" /><br>
                            <hr>
                            Confirm Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <input type="password" name="Confirmpassword" value="" /><br>
                            <hr>
                            <fieldset>

                                <legend><b>Gender</b></legend>
                                <input type="radio" name="gender" id="" value="Male"> Male
                                <input type="radio" name="gender" id="" value="Female"> Female
                                <input type="radio" name="gender" id="" value="Other"> Other

                            </fieldset>
                            <hr>
                            <fieldset>

                                <legend><b>Date of Birth</b></legend>

                                <input type="number" name="day" id="" style="width: 30px;"> <b>/</b>
                                <input type="number" name="month" id="" style="width: 30px;"> <b>/</b>
                                <input type="number" name="year" id="" style="width: 60px;"> &nbsp (dd/mm/yyyy)

                            </fieldset>
                            <hr>
                            <input type="submit" name="submit" value="submit" >&nbsp&nbsp
                            <input type="reset" name="reset" value="reset" />

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