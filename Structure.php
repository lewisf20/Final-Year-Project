<?php require "header.php"; ?>
<head>
   <link rel="stylesheet" href="css/learn.css">
</head>

<!-- Contents of learning chapters -->
<!-- Hidden initially till Menu button pressed-->
<nav class="contents">
   <ul>
      <li><a href="Learn.php">What is HTML?</a></li>
      <li><a href="Structure.php" id="here">Structure</a></li>
      <li><a href="ElementAndTags.php">Elements & Tags</a></li>
      <li><a href="LinksAndImages.php">Links and Images</a></li>
      <li><a href="Attributes.php">Attributes</a></li>
   </ul>
</nav>

<!--Menu button-->


<section class="info">

   <div>
      <h2>Structure of HTML</h2>
      
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam praesentium fugiat laborum voluptate voluptas modi. Nesciunt nemo optio earum blanditiis! Harum quam dicta sunt explicabo natus autem, animi aliquid odio similique nulla saepe dolor officia iure exercitationem eaque quae alias, accusantium dolorem consequatur nostrum, excepturi incidunt blanditiis itaque? Labore.</p>

   </div>
   
</section>
<section class="info">

   <div>
   <img src="images/HTMLexample.png" alt="HTML basic layout" class="learnImages">
   </div>
   
</section>
<?php
   if (isset($_SESSION['userid'])) {
                    $user = $_SESSION['username'];
                    echo '<a href="quiz/quiz2/quiz.php"><button class="button">Take a Quiz!</button></a>'; 
   }
?>

<?php require "footer.php"; ?>
