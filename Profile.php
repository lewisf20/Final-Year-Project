<?php
require "header.php";
?>

<head>
    <link rel="stylesheet" href="css/learn.css">
</head>

<body>
    <section class="info" style="text-align: center;">

        <div>
            <?php
            if (isset($_SESSION['userid'])) {
                $user = $_SESSION['username'];
                $useremail = $_SESSION['useremail'];
                echo '<h2>' . $user . '\'s Profile</h2>';
                echo '<p class="profileInfo">Email : ' . $useremail . '</p>';
                echo '<button class="button">Change email</button>';
                echo '<button class="button">Change password</button>';
            }
            ?>

        </div>

    </section>
    <section class="info" style="text-align: center;">

        <div>
            <!-- Inline php to get quiz scores for user from db -->
            <?php
            if (isset($_SESSION['userid'])) {
                require 'php-actions/dbhandler.php';

                //Echo users name in a header
                $user = $_SESSION['username'];
                echo '<h2>' . $user . '\'s Quiz Scores</h2>';

                // //Contact database and retrieve scores
                // //SELECT quiz1, quiz2, quiz3, quiz4, quiz5 FROM scores WHERE username = $user
                $sql = "SELECT quiz1, quiz2, quiz3, quiz4, quiz5 FROM scores WHERE username = ".$user."";
                

                $result = mysqli_query($conn, $sql );
                $row = mysqli_fetch_array($result);
                
                //Get results from each column
                $quiz1Val = $row[0];
                $quiz2Val = $row[1];
                $quiz3Val = $row[2];
                $quiz4Val = $row[3];
                $quiz5Val = $row[4];
                

                echo '<p>'.$quiz2Val.'</p>';







            }
            ?>

        </div>

    </section>

</body>


<?php
require "footer.php";
?>