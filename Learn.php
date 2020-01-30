<?php require "header.php"; ?>

<head>
   <link rel="stylesheet" href="css/learn.css">
</head>

<!-- Contents of learning chapters -->
<!-- Hidden initially till Menu button pressed-->
<nav class="contents">
   <ul>
      <li><a href="Learn.php" id="here">What is HTML?</a></li>
      <li><a href="Structure.php">Structure</a></li>
      <li><a href="ElementAndTags.php">Elements & Tags</a></li>
      <li><a href="LinksAndImages.php">Links and Images</a></li>
      <li><a href="Attributes.php">Attributes</a></li>
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
      <h1>Potential video ????</h1>

   </div>

</section>
<?php
if (isset($_SESSION['userid'])) {
   $user = $_SESSION['username'];
   echo '<a href="quiz/quiz1/quiz.php"><button class="button">Take a Quiz!</button></a>';
}
?>

<?php require "footer.php"; ?>