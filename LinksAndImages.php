<?php require "header.php"; ?>

<head>
   <link rel="stylesheet" href="css/learn.css">
</head>

<!-- Contents of learning chapters -->
<!-- Hidden initially till Menu button pressed-->

<body>


   <nav class="contents">
      <ul>
         <li><a href="Learn.php">What is HTML?</a></li>
         <li><a href="Structure">Structure</a></li>
         <li><a href="ElementAndTags">Elements & Tags</a></li>
         <li><a href="LinksAndImages" id="here">Links and Images</a></li>
         <li><a href="Attributes">Attributes</a></li>
      </ul>
   </nav>

   <!--Menu button-->


   <section class="info">

      <div>
         <h2>Links and Images </h2>
         <p class="contentP">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam praesentium fugiat laborum voluptate voluptas modi. Nesciunt nemo optio earum blanditiis! Harum quam dicta sunt explicabo natus autem, animi aliquid odio similique nulla saepe dolor officia iure exercitationem eaque quae alias, accusantium dolorem consequatur nostrum, excepturi incidunt blanditiis itaque? Labore.</p>

      </div>
      <p class="chapterEnd">Next chapter we will go into detail about HTML Attributes</p>
      <a href="Attributes"><button class="button">Next</button></a>
   </section>
   <?php
   if (isset($_SESSION['userid'])) {
      $user = $_SESSION['username'];
      echo '<a href="quiz/quiz4/quiz.php" id="quizLink"><button class="button">Take a Quiz!</button></a>';
   }
   ?>
</body>
<?php require "footer.php"; ?>