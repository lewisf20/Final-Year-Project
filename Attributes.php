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
         <li><a href="LinksAndImages">Links and Images</a></li>
         <li><a href="Attributes" id="here">Attributes</a></li>
      </ul>
   </nav>

   <section class="info">

      <div>
         <h2>Attributes</h2>
         <img src="images/attribute.svg" alt="paragraph tag with attribute color and value red" class="learnImages">
         <p class="contentP">In HTML attributes define additional <strong>characteristics</strong> of an element. Attributes
            are specified in the opening tag and consists of a <strong>key/value</strong> pair in the form: <strong><em>key=&quot;value&quot;</em></strong>.</p>

         <p class="contentP">Attribute values are always enclosed within quotation marks, whereas the value is not.</p>
         <p class="contentP">A useful reference for every attribute in HTML and which elements they apply to is<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes" style="color: royalblue"><strong>Mozilla Development Network</strong></a></p>
         <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes" target="_blank"><button class="button">MDN</button></a>
         

      </div>


   </section>

   <section class="info">

      <div>
         <h2>Using the style attribute</h2>
         <img src="images/attributeCSS.svg" alt="" class="learnImages">
         <p class="contentP">The style attribute allows HTML elements to be styled. It uses 
            CSS (<strong>Cascading Style Sheet</strong>) styling declarations to be applied to the element.
         </p>
         <h2>Exercise</h2>
         <pre>
            <code>&lt;h1 style=&quot;color: green&quot;&gt;Attributes&lt;/h1&gt;</code>
         </pre>
         <p class="contentP" style="color: royalblue">Add the style attribute to the h1 element below, change it to green or your favourite colour.</p>
         <p>List of named colors in HTML</p>
         <a href="https://www.w3schools.com/colors/colors_names.asp" target="_blank"><button class="button">Colors</button></a>
         <iframe src="https://trinket.io/embed/html/3972db59fd?runMode=autorun" width="100%" height="356" frameborder="0" marginwidth="0"
             marginheight="0" allowfullscreen></iframe>

      </div>

   </section>
   <?php
   if (isset($_SESSION['userid'])) {
      $user = $_SESSION['username'];
      echo '<a href="quiz/quiz5/quiz.php" id="quizLink"><button class="button">Take a Quiz!</button></a>';
   }
   ?>
</body>
<?php require "footer.php"; ?>