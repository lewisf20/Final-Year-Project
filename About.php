<?php require "header.php"; ?>

        <section class="info">
            
            <div>
                <?php
                    if(isset($_SESSION['userid']))
                    {
                        echo '<p>YOU ARE LOGGED IN</p>';
                    }
                    else
                    {
                        echo '<p>YOU ARE LOGGED OUT</p>';
                    }
                ?>
                <h2>About me</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam praesentium fugiat laborum voluptate voluptas modi. Nesciunt nemo optio earum blanditiis! Harum quam dicta sunt explicabo natus autem, animi aliquid odio similique nulla saepe dolor officia iure exercitationem eaque quae alias, accusantium dolorem consequatur nostrum, excepturi incidunt blanditiis itaque? Labore.</p>

            </div>
        </section>

<?php require "footer.php" ?>