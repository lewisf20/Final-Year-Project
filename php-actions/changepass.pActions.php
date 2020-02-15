<?php
if (isset($_POST['change-pass'])) {
    require 'dbhandler.php';

    $username = $_POST['user'];
    $email = $_POST['mail'];
    $pass = $_POST['pass'];
    $newPass = $_POST['new-pass'];
    $newPassRepeat = $_POST['new-pass-repeat'];

    //simple checks - is empty and validate pass
    if (empty($pass) || empty($newPass) || empty($newPassRepeat)) {
        header("Location: ../changepass.php?error=emptyfields");
        exit();
    } else if ($newPass !== $newPassRepeat) {
        header("Location: ../changepass.php?error=passwordsnotmatching");
        exit();
    } else {
        $hashedPass = password_hash($newPass, PASSWORD_DEFAULT);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "UPDATE users SET userpass='" . $hashedPass . "' 
        WHERE username='" . $username . "' && useremail='" . $email . "';";

        
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../changepass.php?error=sqlerror");
            exit();
        }

        if (mysqli_stmt_execute($stmt)) {
            echo "Updated successfully";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }

        
        header("Location: ../Profile.php");
        mysqli_close($conn);
    }
}
