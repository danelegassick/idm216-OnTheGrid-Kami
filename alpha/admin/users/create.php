<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Create User';
include_once __DIR__ . '/../../_components/header.php';
?>
<div class="container">
<h1>Add a User</h1>
<br>
    <form action="<?php echo site_url(); ?>/_includes/process_users.php" method="POST">

        <div class="input-field">
        <input class="input-style" type="text" name="first_name" id="first_name">
        <label class="label-style" for="first_name">First Name:</label>
        </div>
        <br>
        <br>

        <div class="input-field">
        <input class="input-style" type="text" name="last_name" id="last_name">
        <label class="label-style" for="last_name">Last Name:</label>
        </div>
        <br>
        <br>

        <div class="input-field">
        <input class="input-style" type="email" name="email" id="email">
        <label class="label-style" for="email">Email:</label>
        </div>
        <br>
        <br>

        <div class="input-field">
        <input class="input-style" type="password" name="password" id="password">
        <label class="label-style" for="password">Password:</label>
        </div>
        <br>
        
        <input class="button" type="submit" value="Submit">
    </form>

</div>



<?php include_once __DIR__ . '/../../_components/footer.php';