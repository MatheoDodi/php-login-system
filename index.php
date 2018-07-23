<?php 
   include_once 'header.php';
?>


     <div class="main-wrapper">
        <div class="loginBox">
            <h2><em>Welcome!</em></h2>
            <h3>Login to your account</h3>
            <form action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="Username or E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <button class="sbm" type="submit" name="submit">Login</button>
            </form>
            <a href="signup.php">Create an Account</a>
        </div>
    </div>

<?php
    include_once 'footer.php';
?>