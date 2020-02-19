<?php

if (isset($_POST['update-scores'])) {
    require 'dbhandler.php';

    //get parameters
    $username = $_POST['user'];
    $score = $_POST['update-scores'];
    $quiz = $_POST['quiz'];
    //Receive url the user has come from
    $url = $_POST['url'];

    $sql = "UPDATE scores SET ".$quiz." = ".$score." WHERE
     username = '" . $username . "';";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../quiz.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_execute($stmt);
        //send back to prev page
        header($url);
        exit();
    }



    //close off the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
