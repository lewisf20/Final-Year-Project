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
            <?php
            if (isset($_SESSION['userid'])) {
                $user = $_SESSION['username'];
                $useremail = $_SESSION['useremail'];
                echo '<h2>' . $user . '\'s Quiz Scores</h2>';
            }
            ?>

        </div>

    </section>

</body>


<?php
require "footer.php";
?>