<!DOCTYPE html>
<html lang="en">

<head>
    <link href="quizStyles.css" rel="stylesheet">
    <link href="../../css/header-footer.css" rel="stylesheet">
    <script defer src="quizScript.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 1</title>
</head>

<?php 
    require "../../header.php";
?>

<body>


    <div id="questionCounter">1</div>
    <div class="container">

        <div id="questionContainer" class="hide">

            <div id="question">Question</div>
            <div id="answerButtons" class="btnGrid">
                <button class="btn">Answer 1</button>
                <button class="btn">Answer 2</button>
                <button class="btn">Answer 3</button>
                <button class="btn">Answer 4</button>
            </div>
        </div>
        <div class="controls">
            <a id="beginBtn" class="beginBtn btn">Begin</a>
            <button id="nextBtn" class="nextBtn btn hide">Next</button>
        </div>
    </div>
        <!-- Sends the users scores to the scores database...-->
        <form action="../../php-actions/updatescores.pActions.php" method="post">
        <button type="submit " id="correctAnswers" name="update-scores" class="hide button"></button>
        <input type="text" name="quiz" value="quiz4" class="hide">
        <input type="text" name="score" id="correctAnswers" class="hide">
        <input type="text" name="url" value="Location: ../LinksAndImages.php" class="hide">
        <?php
            
            if (isset($_SESSION['userid'])) {
                $user = $_SESSION['username'];
                echo '<input type="text" name="user" value="'.$user.'" class="hide">';
            }
        ?>
        
    </form>
</body>

</html>