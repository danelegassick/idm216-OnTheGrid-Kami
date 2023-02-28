<?php
include_once __DIR__ . '/app.php';
$page_title = 'Sign In';
include_once __DIR__ . '/_components/header.php';

?>

<div class="wrapper-top">
<div class="align-center">
<div class="center-contents">
<!-- Sign in prompt w/ logo -->
    <div class="description">
        <img class="logo" src="<?php echo site_url() . '/dist/images/kami-logo.svg';?>">
        <h2 class=""> Sign in to continue to checkout.</h2>
        <p> First time? <span class="underline">Create an account</span></p>
    </div>
<!-- Sign in input fields for email and password -->
    <div class="signin">
        <form>
            <input class="signin-field" type="text" id="email" name="email" placeholder="Email">
            <br>
            <input class="signin-field" type="text" id="password" name="password" placeholder="Password">
        </form>
    </div>
<!-- Forgot password link -->
    <div class="underline">
        <a class="forgot-password" href="#">
            <p>Forgot Password?</p>
        </a>
    </div>
<!-- CTA button: Sign in & checkout -->
    <div class="align-center">
        <a href="checkout.html" class="button"> 
            Sign in
        </a> 
    </div>
</div>
</div>
</div>

<?php include_once __DIR__ . '/_components/footer.php';?>