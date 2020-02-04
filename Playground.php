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

            <?php
            $user = $_SESSION['username'];
            echo '<h2 id="pgHeader">' . $user . ', Welcome to the Playground!</h2>';
            ?>
            <p>Here you can experiment with HTML code and see the result! Hands on learning!</p>
            <h3 id="smallerScreen"></h3>
            <p id="instruction"></p>

        </header>

        <div>
            <iframe src="https://trinket.io/embed/html/cc5ebb3f75?runMode=autorun&showInstructions=true" id="playgroundEditor" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen>
            </iframe>

        </div>
    </section>
</body>
<?php
require "footer.php";
?>