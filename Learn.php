<?php require "header.php"; ?>

<head>
   <link rel="stylesheet" href="css/learn.css">
</head>

<!-- Contents of learning chapters -->
<!-- Hidden initially till Menu button pressed-->

<body>


   <nav class="contents">
      <ul>
         <li><a href="Learn.php" id="here">What is HTML?</a></li>
         <li><a href="Structure">Structure</a></li>
         <li><a href="ElementAndTags">Elements & Tags</a></li>
         <li><a href="LinksAndImages">Links and Images</a></li>
         <li><a href="Attributes">Attributes</a></li>
      </ul>
   </nav>

   <!--Menu button-->


   <section class="info">

      <div>
         <h2>What is HTML?</h2>
         <p class="contentP"><strong>HyperText Markup Language</strong> (HTML) is a descriptive markup language.
            It is the code used to <strong>structure</strong> a webpage and its <strong>content</strong> which is displayed in the browser. </p>

         <p class="contentP"><strong>Markup languages</strong> are used to tell a browser how to set out a webpage.
            They consist of <strong>tags</strong> used to <strong>identify elements</strong> that define how different parts of the page should be displayed.</p>
         <img src="images/WhatIsHTML.png" alt="" class="learnImages">
         <p class="contentP">HTML defines the content of all the web pages on the World Wide Web. By <strong>"Marking up"</strong> the raw content with HTML tags,
            you are able to instruct browsers how different parts of your content is displayed. Making an HTML document with properly marked up
            content is the initial step of developing a web page.</p>
      </div>

   </section>
   <section class="info">

      <div>
         <h2>Setup video</h2>
         <p class="chapterEnd">Next chapter we will look at the Structure of HTML pages</p>
         <a href="Structure"><button class="button">Next</button></a>
      </div>

   </section>
   <?php
   if (isset($_SESSION['userid'])) {
      $user = $_SESSION['username'];
      echo '<a href="quiz/quiz1/quiz.php" id="quizLink"><button class="button">Take a Quiz!</button></a>';
   }
   ?>
</body>
<?php require "footer.php"; ?>