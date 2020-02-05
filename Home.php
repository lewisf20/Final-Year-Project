<?php
require "header.php";
?>
<!--Top section-->

<body>


    <main>
        <section class="top-section">
            <header class="showcase">
                <h1>An interactive web-based learning package for teaching HTML</h1>
                <p class="contentP">Welcome, this has been created for a final year project at <strong>Manchester
                        Metropolitan University</strong> where I currently study Computer Science.</p>


                <h2>About me</h2>
                <p class="contentP">My name is Lewis Frater, I am 24 years old. I love learning and helping others to
                    learn. This is the main motivation for undertaking this project. I want this webisite to assist people learning HTML
                    by using <strong>easy to understand </strong> language so it can appeal to multiple audiences.</p>
                <a href="About.php"><button class="button">See more</button></a>

            </header>
            <div class="top-box top-box-a">
            
                <?php
                if (isset($_SESSION['userid'])) {
                    $user = $_SESSION['username'];
                    echo '<h4 class="contentP">Welcome '.$user.'</h4>';
                } else {
                    echo '<h4 class="contentP">Get access to special features!</h4>
                    <p class="contentP">Create an account to benefit!</p>
                    <p class="contentP">It is totally <strong>FREE</strong></p>
                    <a href="signup.php" id="signup-link"><button class="button">Sign up</button></a>';
                }
                ?>



                
            </div>
            <div class="top-box top-box-b">

                <h4 class="contentP">Special features</h4>
                <!-- <i class="fab fa-leanpub fa-4x"></i>-->
                <p class="contentP">Use a quiz to test your progress</p>
                <p class="contentP">Use the playground for a free instant coding environment</p>
                <a href="Playground.php"><button class="button">Playground</button></a>


            </div>
        </section>


        <!--Info section-->
        <section class="info">
            <img src="images/close-up-code-coding-160107.jpg" alt="">
            <div>
                <h2>The purpose of this website</h2>
                <p class="contentP">This website is a free to access resource which helps people learn HTML
                    (HyperText Markup Language). The goal is to make it easy as possible for people new to
                    HTML to become web developers. So if you haven't written a line of HTML in your life,
                    not to worry, follow the learning guide and Bob's your uncle!</p>

            </div>
        </section>

        <!--Dressing images-->
        <section class="dressing">
            <img src="https://source.unsplash.com/random/200x200" alt="">
            <img src="https://source.unsplash.com/random/201x200" alt="">
            <img src="https://source.unsplash.com/random/202x200" alt="">
            <img src="https://source.unsplash.com/random/203x200" alt="">
            <img src="https://source.unsplash.com/random/204x200" alt="">
            <img src="https://source.unsplash.com/random/205x200" alt="">
        </section>




        </div>
    </main>
</body>
<!--container finished-->
<?php
require "footer.php";
?>