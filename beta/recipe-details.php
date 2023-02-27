
<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Recipe Details';
include_once __DIR__ . '/../../_components/header.php';
?>

<!-- MAIN CONTENT GOES HERE -->

<?php
// get recipes data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $recipe variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/recipes?error=' . $error_message);
}

?>

<div class="hero-img" style="background-image: url(<?php echo site_url(); ?><?php echo $recipe['img_path']?>);"></div>

<div class="container">

    <div class="recipe-blurb">
        <h1 class="recipe-title"><?php echo $recipe['title']?></h1>
        <p class="recipe-blurb-description">
            <?php echo $recipe['overview']?>
        </p>
    </div>

    <div class="blurb-correction">
        <div class="ingredients">
            <h1 class="ingredients-title">Ingredients</h1>
            <div class="grid-2-col">
                <?php echo $recipe['ingredients']?>
            </div>
        </div>

        <div class="instructions">
            <h1 class="instructions-title">Instructions</h1>
            <?php echo $recipe['instructions']?>
        </div>

    </div>

</div>

<?php include_once __DIR__ . '/../../_components/footer.php';