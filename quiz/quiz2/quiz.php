<!DOCTYPE html>
<html lang="en">

<head>
    <link href="quizStyles.css" rel="stylesheet">
    <link href="header-footer.css" rel="stylesheet">
    <script defer src="quizScript.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 1</title>
</head>



<body>
    <!--header start-->
    <header>
        <img src="../../images/logo.png" alt="logo" class="logo" />
        <!-- Nav bar -->
        <nav class="main-nav">
            <ul>
                <li><a href="../../Home.php">Home</a></li>
                <li><a href="../../Learn.php">Learn</a></li>
                <li><a href="../../About.php">About</a></li>
            </ul>

        </nav>
    </header>

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
    <button id="correctAnswers" class="hide"></button>
</body>

</html>