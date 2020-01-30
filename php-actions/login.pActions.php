<?php

if(isset($_POST['login-submit']))
{
    require 'dbhandler.php';

    $emailuser = $_POST['emailuser'];
    $pass = $_POST['passw'];

    if(empty($emailuser) || empty($pass))
    {
        header("Location: ../Home.php?error=emptyfields");
        exit();
    }
    else 
    {
        //Use prepared statements for security
        $sql = "SELECT * FROM users WHERE username=? OR useremail=?;";
        $stmt = mysqli_stmt_init($conn);

        //if sql fails
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../Home.php?error=sqlerror");
            exit();
        }
        else
        {
            //bind and execute sql statement
            mysqli_stmt_bind_param($stmt, "ss", $emailuser, $emailuser);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result))
            {
                $passcheck = password_verify($pass, $row['userpass']);
                if($passcheck == false)
                {
                    header("Location: ../Home.php?error=invalidpassword");
                    exit();
                }
                else if($passcheck == true)
                {
                    session_start();
                    $_SESSION['userid'] = $row['userid'];
                    $_SESSION['username'] = $row['username'];
                    
                    header("Location: ../Home.php?login=success");
                    exit();
                }
            }
            else
            {
                header("Location: ../Home.php?error=invalidusername");
                exit();
            }
        }

    }

}
else 
{
    header("Location: ../Home.php");
    exit();
}