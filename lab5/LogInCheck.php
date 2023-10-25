<?php 

    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    if($username == "" || $password == "")
    {
        echo "null value";
    }else if($username == $password)
    {
        $_SESSION['flag'] = 'true';
        header('location: LID.php');
    }else
    {
        echo "invalid username/password!";
    }
?>