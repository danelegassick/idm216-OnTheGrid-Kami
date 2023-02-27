<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Create User';
include_once __DIR__ . '/../../_components/header.php';
?>


<div class="wrapper-top">
<!-- Sign in prompt w/ logo -->
    <div class="description align-center">
        <img class="logo" src="<?php echo site_url() . '/dist/images/kami-logo.svg';?>">
        <h2 class="">Sign up to join the Kami fam!</h2>
        <p> Returning customer? <a href="<?php echo site_url() . "/auth/login.php";?>" class="underline">Sign In.</a></p>
    </div>

    <div class="signin align-center-notext">
        <form action="<?php echo site_url(); ?>/_includes/process_users.php" method="POST">

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
            <button type="submit" class="button width-300"> 
                Create Account
            </button> 
            </div>    
    </form>

</div>



<?php include_once __DIR__ . '/../../_components/footer.php';