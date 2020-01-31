<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1d0f110cc1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/header-footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Project</title>
</head>
<!--header start-->
<header class="mainHead">
        <img src="images/logo.png" alt="logo" class="logo"/>
        <!-- Nav bar -->
        <nav class="main-nav">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Learn.php">Learn</a></li>

                <!-- Only show playground when user is logged in -->
                <?php
                 if (isset($_SESSION['userid'])) {
                    echo '<li><a href="Playground.php">Playground</a></li>';
                 }
                ?>

                <li><a href="About.php">About</a></li>
            </ul>
            
        </nav>

        <div class="header-login">
                <?php

                //Depending on if user is logged in or not
                //display logout/sign in things
                if (isset($_SESSION['userid'])) {
                    $user = $_SESSION['username'];
                    echo '<div class="login-form"><form action="php-actions/logout.pActions.php">
                    <h4 id="user">Welcome, '.$user.'</h4>
                     <button class="header-btn" type="submit" name="logout-submit">Logout</button>
                    </form></div>';
                } else {
                    echo '<div class="login-form"><form action="php-actions/login.pActions.php" method="post">
                    <input class="input" type="text" name="emailuser" placeholder="Email / Username">
                    <input class="input" type="password"  name="passw" placeholder="Password">
                    <button class="header-btn" type="submit" name="login-submit">Login</button>
                    </form></div>';
                }
                ?>
        </div>


    </header>

<body>
    
    

  