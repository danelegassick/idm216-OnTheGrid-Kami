<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Users';
include_once __DIR__ . '/../../_components/header.php';
$users = get_users();
?>

<div class="container">
  <div>
    <div>
      <div>
        <h1>Users</h1>
        <p>A list of all the users in your account including their name, title, email and role.</p>


        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }
        ?>
      </div>
      <div>
        <button type="button"
          class="button">
          <a href="<?php echo site_url() . '/admin/users/create.php' ?>">
            Add user</a></button>
      </div>
    </div>
    <br>
    <br>
    <div>
      <div>
        <div>
          <div>
            <?php include __DIR__ . '/../../_components/table-users.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once __DIR__ . '/../../_components/footer.php'; ?>