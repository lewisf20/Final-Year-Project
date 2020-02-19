<?php require "header.php"; ?>

<head>
   <link rel="stylesheet" href="css/learn.css">
</head>


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



   <section class="info">

      <div>
         <h2>Links and Images </h2>
         <p class="contentP">Links and Images form a vital part of the web. They deal with external sources: </p>
         <ul>
            <li><strong>Links point the user to another HTML document.</strong></li>
            <li><strong>Images pull another resource into the webpage.</strong></li>
         </ul>

         <p class="contentP">We'll need to know a little about another component of HTML syntax, <strong>attributes.</strong>
            Attributes will open up a world of new possibilities, which we will go more in depth about in the following chapter.</p>


      </div>

   </section>
   <section class="info">

      <div>
         <h2>Anatomy of a link</h2>
         <pre>
            <code>&lt;a href=&quot;url&quot;&gt;Link Text&lt;/a&gt;</code>
            <code>&lt;!--Example--&gt;</code>
            <code>&lt;a href=&quot;www.google.co.uk&quot;&gt;Google&lt;/a&gt;</code>
         </pre>
         <p class="">A link is defined by the &lt;a&gt; tag.</p>
         <p class="">&lt;a&gt; takes an attribute called <strong>href</strong>.</p>
         <p class="contentP">The href attribute is the url of where you want the link to point to. It stands for <em>HyperText Reference</em>.</p>

         <h2>Exercise</h2>
         <p class="contentP" style="color: royalblue">Like the code above, make a link pointing to <strong>www.google.co.uk</strong> or your favourite website.</p>
         <iframe src="https://trinket.io/embed/html/bd13f038c3?runMode=autorun" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>

      </div>

   </section>




   <section class="info">
      <div>
         <h2>Anatomy of an image</h2>
         <pre>
            <code>&lt;img src=&quot;url&quot; alt=&quot;Alternate message&quot; &gt;</code>
            <code>&lt;img src=&quot;https://trinket.io/img/trinket-logo-big.png&quot;</code>
            <code>alt=&quot;trinket logo&quot; &gt;</code>


      </pre>
         <p class="">Images are defined with the &lt;img&gt; tag.</p>
         <p class="">It only contains attributes and does not have a closing tag.</p>
         <p class="">The <strong>src</strong> attribute specifies the web address, or local address of the image.</p>
         <p class="contentP">The <strong>alt</strong> attribute specifies the message displayed if the image doesn't load, an alternative to the image.</p>

         <h2>Exercise</h2>
         <p style="color: royalblue">Like the code above, make a image pointing to <strong>https://trinket.io/img/trinket-logo-big.png</strong> or another image on the web.</p>
         <p style="color: royalblue">Also set an alt attribute describing the image</p>
         <iframe src="https://trinket.io/embed/html/1868abced0?runMode=autorun" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>

      </div>

   </section>

   <section class="info">
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