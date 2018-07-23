<?php 
   include_once 'header.php';
?>


     <div class="main-wrapper">
        <div class="loginBox">
            <h2><em>Welcome!</em></h2>
            <h3>Create Your Account</h3>
            <form action="includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="First Name">
                <input type="text" name="last" placeholder="Last Name">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                
                <button class="sbm" type="submit" name="submit">Sign Up</button>
            </form>
            <a href="index.php">Already have an Account?</a>
        </div>
    </div>

<?php
    include_once 'footer.php';
?>