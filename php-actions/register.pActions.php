<?php

if (isset($_POST['signup'])) {
    require 'dbhandler.php';

    //Get parameters ## explain diff between post and get
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $passrepeat = $_POST['password-repeat'];

    //Error handlers

    //empty formspaces
    if (empty($username) || empty($email) || empty($pass) || empty($passrepeat)) {
        header("Location: ../signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidusernameemail");
        exit();
    }
    //valid email
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&uid=" . $username);
        exit();
    }
    //valid username
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidusername&mail=" . $email);
        exit();
    }
    //check if passwords match
    else if ($pass !== $passrepeat) {
        header("Location: ../signup.php?error=invalidpass&uid=" . $username . "&mail=" . $email);
        exit();
    }
    //check if username already in db
    else {
        //Use prepared statements for security
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);

        //Check db connection
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        //bind params to the prepared statement and execute
        //then store result
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rcheck = mysqli_stmt_num_rows($stmt);

            //If more than one row, username is taken
            if ($rcheck > 0) {
                header("Location: ../signup.php?error=usernametaken");
                exit();
            } else {
                //Prepared statements
                $sql = "INSERT INTO users (username, useremail, userpass) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                //Check db connection
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    //Hash the password for entry to the database for security
                    $hashedpass = password_hash($pass, PASSWORD_DEFAULT);


                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpass);
                    mysqli_stmt_execute($stmt);

                    //log user in
                    {
                        //Use prepared statements for security
                        $sql = "SELECT * FROM users WHERE username=?";
                        $stmt = mysqli_stmt_init($conn);

                        //if sql fails
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../Home.php?error=sqlerror");
                            exit();
                        } else {
                            //bind and execute sql statement
                            mysqli_stmt_bind_param($stmt, "s", $username);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if ($row = mysqli_fetch_assoc($result)) {
                                $passcheck = password_verify($pass, $row['userpass']);
                                if ($passcheck == false) {
                                    header("Location: ../Home.php?error=invalidpassword");
                                    exit();
                                } else if ($passcheck == true) {
                                    session_start();
                                    $_SESSION['userid'] = $row['userid'];
                                    $_SESSION['username'] = $row['username'];
                                    $_SESSION['useremail'] = $row['useremail'];

                                    header("Location: ../Home.php?login=success");
                                    
                                }
                            } else {
                                header("Location: ../Home.php?error=invalidusername");
                                exit();
                            }
                        }
                    }

                    header("Location: ../Home.php");
                }
            }
        }
    }

    //close off the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
//accessed without permission
else {
    header("Location: ../signup.php");
    exit();
}


// Add user to the scores database

if (isset($_POST['signup'])) {
    require 'dbhandler.php';

    //Get parameters
    $username = $_POST['username'];

    //new statement to insert user into scores database
    $sql = "INSERT INTO scores (username) VALUES ('" . $username . "')";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        exit();
    }



    //close off the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
