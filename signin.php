<?php require "header.php"; ?>


    <div class="sign-in-up">
        <form action="php-actions/login.pActions.php" method="post">
            <input type="text" name="uidEmail" placeholder="Email / Username">
            <input type="password"  name="passw" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
        </form>
        <h3>Not got an account? <a href="signup.php"><button>Create an account</button></a></h3>
        
    </div>

<?php require "footer.php"; ?>