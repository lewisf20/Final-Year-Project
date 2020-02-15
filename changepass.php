<?php require "header.php"; ?>


<div class="sign-in-up">
    <form action="php-actions/changepass.pActions.php" method="post">
        <h3>Change Password</h3>
        <?php
        if (isset($_SESSION['userid'])) {
            $user = $_SESSION['username'];
            $useremail = $_SESSION['useremail'];
            echo '<input type="text" name="user" value="' . $user . '">
                    <input type="text" name="mail" value="' . $useremail . '">
                    <input type="password"  name="pass" placeholder="Current Password">
                    <input type="password"  name="new-pass" placeholder="New Password">
                    <input type="password"  name="new-pass-repeat" placeholder="Repeat New Password">';
        }
        ?>


        <button type="submit" name="change-pass" class="button">Update</button>
    </form>


</div>

<?php require "footer.php"; ?>