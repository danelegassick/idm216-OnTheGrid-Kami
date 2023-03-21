<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Log In';
include_once __DIR__ . '/../_components/header-back.php';
$errorMessage = isset($_GET['error']) ? $_GET['error'] : false;
if ($errorMessage){
    echo $errorMessage;}
?>

<div class="wrapper-top">
<!-- Sign in prompt w/ logo -->
    <div class="description align-center">
        <img class="logo" src="<?php echo site_url() . '/dist/images/kami-logo.svg';?>">
        <h2 class=""> Sign in to continue to checkout.</h2>
        <p> First time? <a href="<?php echo site_url() . "/auth/signup.php";?>" class="underline">Create an account.</a></p>
    </div>
<!-- Sign in input fields for email and password -->
    <div class="signin align-center-notext">
        <form action="<?php echo site_url();?>/_includes/process-login.php" method="POST">
            <label class="signin-label" name="email">Email</label>
            <br>
            <input class="signin-field" type="text" id="email" name="email" autocomplete="email" required>
            <br>
            <label class="signin-label" name="email">Password</label>
            <br>
            <input class="signin-field" type="password" id="password" name="password" autocomplete="current-password" required>
<!-- Forgot password link -->
    <div class="underline align-center">
        <a class="forgot-password" href="#">
            <p>Forgot Password?</p>
        </a>
    </div>
<!-- CTA button: Sign in & checkout -->
        <button type="submit" class="btn-dark align-center"> 
            Sign in & checkout
        </button> 
    
</form>
</div>

    