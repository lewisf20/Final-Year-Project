<?php
if (isset($_POST['change-email'])) {
    require 'dbhandler.php';
    //start session so can update email variable late
    session_start();

    $username = $_POST['user'];
    $currentMail = $_POST['mail'];
    $newMail = $_POST['newmail'];
    $pass = $_POST['passw'];

    //simple checks - is empty and validate email
    if (empty($currentMail) || empty($newMail) || empty($pass)) {
        header("Location: ../signup.php?error=emptyfields&mail=" . $currenMmail);
        exit();
    } else if (!filter_var($newMail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidusernameemail");
        exit();
    } else {
        $hashedpass = password_hash($pass, PASSWORD_DEFAULT);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "UPDATE users SET useremail='" . $newMail . "' 
        WHERE username='" . $username . "' && useremail='" . $currentMail . "';";

        //$sql = "UPDATE users SET useremail='4321@gmail.com' WHERE ";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }

        if (mysqli_stmt_execute($stmt)) {
            echo "Updated successfully";
        } else {
            echo "Error updating email: " . mysqli_error($conn);
        }

        $_SESSION['useremail'] = $newMail;
        header("Location: ../Profile.php");
        mysqli_close($conn);
    }
}
