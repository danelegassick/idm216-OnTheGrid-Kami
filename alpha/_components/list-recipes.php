<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<!-- <table class="data-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Overview</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Instructions</th>
      <th scope="col">
        <span>Edit</span>
      </th>
      <th scope="col">
        <span>View Recipe</span>
      </th>
    </tr>
  </thead>
  <tbody> -->
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    //$site_url = site_url();
    //while ($recipe = mysqli_fetch_array($recipes)) {
        //echo "
          //<tr>
            //<td>{$recipe['id']}</td>
            //<td>{$recipe['title']}</td>
            //<td><img class='table-img' src='{$site_url}{$recipe['img_path']}'></td>
            //<td>{$recipe['overview']}</td>
            //<td>{$recipe['ingredients']}</td>
            //<td>{$recipe['instructions']}</td>
            //<td>
              //<a href='{$site_url}/admin/recipes/edit_recipes.php?id={$recipe['id']}'>Edit</a>
              //<a href='{$site_url}/admin/recipes/delete_recipes.php?id={$recipe['id']}'>Delete</a>
            //</td>
            //<td>
              //<a href='{$site_url}/admin/recipes/recipe-details.php?id={$recipe['id']}'>View Recipe</a>
            //</td>
          //</tr>";
    //}
?>
  <!-- </tbody>
</table> -->



<?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "          
          <div class='recipe-block'>
            <div class='recipe-block-grid'>
              <img src='{$site_url}{$recipe['img_path']}' class='table-img'>
              <div class='recipe-block-text'>
                <h2><a class='link' href='{$site_url}/admin/recipes/recipe-details.php?id={$recipe['id']}'>{$recipe['title']}</a></h2>
                <p>{$recipe['overview']}</p>
              </div>
            </div>
          </div>
          <hr>";
    }
?>
<!-- <div class='recipe-block'>
  <div class='recipe-block-grid'>
    <img src='' class='table-img'>
    <div class='recipe-block-text'>
      <h2></h2>
      <p></p>
      <a class='block' href='{$site_url}/admin/recipes/recipe-details.php?id={$recipe['id']}'>View Recipe</a>
      <a class='block' href='{$site_url}/admin/recipes/edit_recipes.php?id={$recipe['id']}'>Edit</a>
      <a class='block' href='{$site_url}/admin/recipes/delete_recipes.php?id={$recipe['id']}'>Delete</a>
    </div>
  </div>
</div> -->