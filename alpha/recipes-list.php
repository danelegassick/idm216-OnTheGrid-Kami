<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/_components/header.php';
$recipes = get_recipes();
?>

<div class="container">
  <div>
    <div>
      <div>
        <h1>Recipes</h1>
        <p>A list of all the recipes in the site.</p>
        <form action="<?php echo site_url();?>/admin/search/search-general.php" method="GET">
          <input type = "text" name="search" id="search" placeholder="Search">
          <button class="button" type="submit">Search</button>
        </form>
        <?php
        // If error query param exist, show error message
          if (isset($_GET['error'])) {
              echo '<p>' . $_GET['error'] . '</p>';
          }

?>
      </div>
    </div>
    <div>
      <div>
        <div>
            <?php include __DIR__ . '/_components/list-recipes.php'; ?>
        </div>
      </div>
    </div>
  </div>
</div>





<?php include_once __DIR__ . '/_components/footer.php';
