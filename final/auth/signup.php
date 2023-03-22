<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Log In | KAMI Food Truck';
include_once __DIR__ . '/../_components/header-back.php';
?>


<div class="wrapper-top">
<!-- Sign in prompt w/ logo -->
    <div class="description align-center">
        <img class="logo" src="<?php echo site_url() . '/dist/images/kami-logo.svg';?>">
        <h2 class="">Sign up to join the Kami fam!</h2>
        <p> Returning customer? <a href="<?php echo site_url() . "/auth/login.php";?>" class="underline">Sign In.</a></p>
    </div>

    <div class="signin align-center-notext">
        <form action="<?php echo site_url();?>/_includes/process-signup.php" method="POST">

        <label class="signin-label" for="first_name">First Name</label>
            <br>
            <input class="signin-field" type="text" name="first_name" id="first_name" required>
        <br>

        <label class="signin-label" for="last_name">Last Name</label>
            <br>
            <input class="signin-field" type="text" name="last_name" id="last_name" required>
        <br>

        <label class="signin-label" for="email">Email</label>
            <br>
            <input class="signin-field" type="email" name="email" id="email" required>
        <br>

        <label class="signin-label" for="password">Password</label>
            <br>
            <input class="signin-field" type="password" name="password" id="password" required>
        <br>
        
        <br>
        
            <div class="align-center">
            <button type="submit" class="btn-dark align-center width-300"> 
                Create Account
            </button> 
            </div>    
    </form>

</div>
    </div>
    </div>

    
