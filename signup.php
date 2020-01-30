<?php require "header.php"; ?>


    <div class="sign-in-up">
        <form action="php-actions/register.pActions.php" method="post">
            <h3>Create an Account</h3>
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="Email">
            <input type="password"  name="passw" placeholder="Password">
            <input type="password"  name="passw-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Sign up</button>
        </form>
        
        
    </div>

<?php require "footer.php"; ?>