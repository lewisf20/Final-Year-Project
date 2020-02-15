<?php require "header.php"; ?>


<div class="sign-in-up">
    <form action="php-actions/changeemail.pActions.php" method="post">
        <h3>Change Email</h3>
        <?php
        if (isset($_SESSION['userid'])) {
            $user = $_SESSION['username'];
            $useremail = $_SESSION['useremail'];
            echo '<input type="text" name="user" value="' . $user . '">
                    <input type="text" name="mail" value="' . $useremail . '">
                    <input type="text" name="newmail" placeholder="New Email">
                    <input type="password"  name="passw" placeholder="Password">';
        }
        ?>


        <button type="submit" name="change-email" class="button">Update</button>
    </form>


</div>

<?php require "footer.php"; ?>