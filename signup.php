<?php require "header.php"; ?>


<div class="signInContainer">
    <div class="sign-in-up">
        <form action="php-actions/register.pActions.php" method="post">
            <h3>Create an Account</h3>
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit" class="button">Sign up</button>
        </form>


    </div>
</div>

<?php require "footer.php"; ?>