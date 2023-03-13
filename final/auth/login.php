<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Sign In';
include_once __DIR__ . '/../_components/header-back.php';

$previousURL = $_SERVER['HTTP_REFERER'];

?>

<div class="wrapper-top">
<!-- Sign in prompt w/ logo -->
    <div class="description align-center">
        <img class="logo" src="<?php echo site_url() . '/dist/images/kami-logo.svg';?>">
        <h2 class=""> Sign in to continue to checkout.</h2>
        <p> First time? <a href="<?php echo site_url() . "/admin/users/create.php";?>" class="underline">Create an account.</a></p>
    </div>
<!-- Sign in input fields for email and password -->
    <div class="signin align-center-notext">
        <form action="<?php echo site_url() . '/_includes/process-login.php' ?>" method="POST">
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
    <div class="align-center">
            <!-- <input type='hidden' name='userID' value='<?php echo "{$user['id']}"; ?>'/>
            <input type='hidden' name='mealID' value='<?php echo "{$mealID}"; ?>'/> -->
        <button type="submit" class="btn-dark align-center"> 

            Sign in & checkout
        </button> 
    </div>
    
</form>
</div>


<?php include_once __DIR__ . '/../_components/footer.php';?>
