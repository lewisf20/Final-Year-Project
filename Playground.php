<?php
require "header.php";
?>

<!-- Stylesheet unqiuely for this page -->

<head>
    <link rel="stylesheet" href="css/playground.css">
    <script src="js/general.js"></script>
</head>

<body>
    <section>
        <header id="welcomeHeader">



            <h3 id="smallerScreen"></h3>
            <p id="instruction"></p>



            <?php
            if (isset($_SESSION['userid'])) {
                $user = $_SESSION['username'];
                echo '<h2 id="pgHeader">' . $user . ', Welcome to the Playground!</h2>';
                echo '<p>Here you can experiment with HTML code and see the result! Hands on learning!</p></header>';
                echo '<div>
                <iframe src="https://trinket.io/embed/html/cc5ebb3f75?runMode=autorun&showInstructions=true" 
                    id="playgroundEditor" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen>
                </iframe>
                </div>';
            } else {
                echo '<h2 class="pgHeader">You must sign up to use the playground!</h2>
            <p>Here you can experiment with HTML code and see the result! Hands on learning!</p></header>';
            }
            ?>

    </section>
</body>
<?php
require "footer.php";
?>