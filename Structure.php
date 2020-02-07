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
         <li><a href="Structure" id="here">Structure</a></li>
         <li><a href="ElementAndTags">Elements & Tags</a></li>
         <li><a href="LinksAndImages">Links and Images</a></li>
         <li><a href="Attributes">Attributes</a></li>
      </ul>
   </nav>

   <!--Menu button-->


   <section class="info">

      <div>
         <h2>Structure of HTML</h2>
         <p class="contentP">
            Webpages tend to share similar components unless it is badly structured.
            Some of the components are below.
         </p>

         <h4 class="subHeadings">Header:</h4>
         <p class="contentP">
            Usually across the top with a heading or logo. Information about a website usually stays the
            same from one page to another.
         </p>

         <h4 class="subHeadings">Navigation:</h4>
         <p class="contentP">
            This contains links to other parts of the website. This content usually remains consistent
            throughout each page on the website. Alot of web designers consider the navigation to be a part of the header
            rather than an individual component. However, seperating the two is better for accessibility,
            as screen readers can distinguish between the two features more easilly.
         </p>

         <h4 class="subHeadings">Main:</h4>
         <p class="contentP">
            This is the big area in the middle that contains the unique content of a webpage. This is a part of the website
            that will vary from page to page. It can potentially hold content such as:
         </p>
         <ul>
            <li>Videos you watch</li>
            <li>New Headlines</li>
            <li>Main Story</li>
            <li>A map you are viewing</li>
         </ul>
         <p class="contentP">and much more...</p>

         <h4 class="subHeadings">Sidebar:</h4>
         <p class="contentP">
            Sidebars usually hold information relating to the main content, or links, adverts, quotes.
            It can also be a secondary navigation system for a particular webpage.
         </p>

         <h4 class="subHeadings">Footer:</h4>
         <p class="contentP">
            Almost always across the bottom of a webpage. Usually consistent throughout, although not always.
            The footer usually contains fine print, copyright notices or/and contact info. It contains common information,
            similar to the header but the information is usually not critical.
         </p>



      </div>

   </section>

   <section class="info">
      <h4 class="subHeadings">A general layout</h4>
      <p class="contentP">
         A webpage could be structured like this:
      </p>
      <img src="images/structure.png" alt="" class="websiteEg">
      <p class="chapterEnd">Next chapter we will go into detail about HTML elements and tags</p>
      <a href="ElementAndTags"><button class="button">Next</button></a>
   </section>
   <?php
   if (isset($_SESSION['userid'])) {
      $user = $_SESSION['username'];
      echo '<a href="quiz/quiz2/quiz.php" id="quizLink"><button class="button">Take a Quiz!</button></a>';
   }
   ?>
</body>
<?php require "footer.php"; ?>