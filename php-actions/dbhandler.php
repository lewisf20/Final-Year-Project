<?php

$servername = "localhost";
$usernamedb = "root";
$passdb = "";
$namedb = "userdb";

$conn = mysqli_connect($servername, $usernamedb, $passdb, $namedb);

if(!$conn)
{
    die("Connection refused/failed".mysqli_connect_error());
}

