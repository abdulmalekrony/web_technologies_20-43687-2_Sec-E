<html>
<?php
    session_start();

    error_reporting(0);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['homereg'])) {
            $name = $_POST['name'];
        } elseif (isset($_POST['sekreg'])) {
            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
            } else {
                $nerr = "No name given!";
            }

            if (!empty($_POST['uname'])) {
                $uname = $_POST['uname'];
            } else {
                $uerr = "No username given!";
            }

            if (!empty($_POST['email'])) {
                $email = $_POST['email'];
            } else {
                $emerr = "No email given!";
            }

            if (!empty($_POST['type'])) {
                $type = $_POST['type'];
            } else {
                $terr = "Organization type not given!";
            }

            if (!empty($_POST['contact'])) {
                $contact = $_POST['contact'];
            } else {
                $cerr = "Contact number not given!";
            }

            if (!empty($_POST['loc'])) {
                $loc = $_POST['loc'];
            } else {
                $locerr = "No location given!";
            }

            if (!empty($_POST['web'])) {
                $web = $_POST['web'];
            }

            if (!empty($_POST['lic'])) {
                $lic = $_POST['lic'];
            } else {
                $licerr = "License missing!";
            }

            if (!empty($_POST['pass'])) {
                $pass = $_POST['pass'];
                if (!empty($_POST['cpass'])) {
                    $cpass = $_POST['cpass'];
                    if ($pass == $cpass) {
                        $fpass = password_hash($pass, PASSWORD_DEFAULT);
                    } else {
                        $cperr = "Passwords do not match!";
                    }
                } else {
                    $cperr = "Re enter password!";
                }
            } else {
                $perr = "No password given!";
            }

            if ($nerr == "" && $uerr == "" && $perr == "" && $cperr == "" && $emerr == "" && $terr == "" && $cerr == "" && $locerr == "" && $weberr == "" && $licerr == "") {
                $sql1 = "INSERT INTO login (username, email, password, usertype)
                VALUES ('$uname', '$email', '$fpass', 'employer');";

                mysqli_query($conn, $sql1);

                $lastID = mysqli_insert_id($conn);

                $sql2 = "INSERT INTO employer (userID, name, email, type, contact, location, website, license)
                VALUES ('$lastID','$name','$email','$type','$contact','$loc',NULLIF('$web',''),'$lic');";

                mysqli_query($conn, $sql2);
                $_SESSION['empreg'] = "Successful";

                header('Location: login.php');
            }

            echo mysqli_error($conn);
        }
    }
?>
<body>
    <table width="100%">
        <tr>
            <td width="50%" align="center">
                <form action="empreg.php" method="POST">
                    <div align="left">
                        <label>Register as an Employer</label><br><br><br>
                        <table width="100%">
                            <tr>
                                <td><label>Name: &nbsp</label></td>
                                <td><input type="text" name="name" maxlength="50" value="<?php echo $name ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $nerr ?></td>
                            </tr>
                            <tr>
                                <td><label>Username: &nbsp</label></td>
                                <td><input type="text" name="uname" maxlength="100" value="<?php echo $uname ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $uerr ?></td>
                            </tr>
                            <tr>
                                <td><label>Password: &nbsp</label></td>
                                <td><input type="password" name="pass" maxlength="50"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $perr ?></td>
                            </tr>
                            <tr>
                                <td width="210px"><label>Confirm Password: &nbsp</label></td>
                                <td><input type="password" name="cpass" maxlength="50"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $cperr ?></td>
                            </tr>
                            <tr>
                                <td><label>Email: &nbsp</label></td>
                                <td><input type="email" name="email" maxlength="20" value="<?php echo $email ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $emerr ?></td>
                            </tr>
                            <tr>
                                <td><label>Type: &nbsp</label></td>
                                <td><input type="text" name="type" maxlength="20" value="<?php echo $type ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $terr ?></td>
                            </tr>
                            <tr>
                                <td><label>Contact Number: &nbsp</label></td>
                                <td><input type="number" name="contact" maxlength="20" value="<?php echo $contact ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $cerr ?></td>
                            </tr>
                            <tr>
                                <td><label>Location: &nbsp</label></td>
                                <td><input type="text" name="loc" maxlength="100" value="<?php echo $loc ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $locerr ?></td>
                            </tr>
                            <tr>
                                <td><label>Website: &nbsp</label></td>
                                <td><input type="Number" name="web" maxlength="5" step="0.01" value="<?php echo $web ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $weberr ?></td>
                            </tr>
                            <tr>
                                <td><label>License: &nbsp</label></td>
                                <td><input type="text" name="lic" maxlength="100" value="<?php echo $lic ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo $licerr ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="left"><br><input type="submit" name="sekreg" value="Register"></td>
                            </tr>
                        </table>
                    </div>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
