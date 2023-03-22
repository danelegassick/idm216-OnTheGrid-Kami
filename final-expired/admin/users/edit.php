<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit User';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php
// get recipes data from database
$query = "SELECT * FROM users WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $recipe variable;
    $user = mysqli_fetch_assoc($result);
} else {
    $error_message = 'User does not exist';
    // redirect_to('/admin/recipes?error=' . $error_message);
}

?>

<div class="container">
  <div>
    <div>
      <div>
        <h1>Edit Recipe</h1>
        <br>
      </div>
    </div>
    <div>
      <div>
        <div>
          <div>
            <form action="<?php echo site_url(); ?>/_includes/process_edit_users.php" method="POST">
              <div class="input-field">
              <input class="input-style" type="text" name="first_name"
                  value="<?php echo $user['first_name']?>" id="first_name">
                <label class="label-style-edit" for="first_name">First Name:</label>
              </div>
              <br>

              <div class="input-field">
              <input class="input-style" type="text" name="last_name"
                  value="<?php echo $user['last_name']?>" id="last_name">
                <label class="label-style-edit" for="last_name">Last Name:</label>
              </div>
              <br>

              <div class="input-field">
              <input class="input-style" type="text" name="email"
                  value="<?php echo $user['email']?>" id="email">
                <label class="label-style-edit" for="email">Email:</label>
              </div>
              <br>
            
              <input class="button" type="submit" value="Submit">

              <input type="hidden" name="id" value="<?php echo $user['id']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';