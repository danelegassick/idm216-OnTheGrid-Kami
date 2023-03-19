<?php
include_once __DIR__ . '/app.php';
$page_title = 'KAMI';
include_once __DIR__ . '/_components/header.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
$restrictions = get_restrictions();
$spices = get_spices();
$proteins = get_proteins();
?>

<?php
// get recipes data from database
$query = "SELECT * FROM meals WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $recipe variable;
    $meal = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Meal does not exist';
    // redirect_to('/admin/recipes?error=' . $error_message);
}
$site_url = site_url();
?>
<span class="hidden" id="site_url"><?php echo $site_url;?></span>


        <div class="modal">
                
            <div class="x-out">
                <a href="<?php echo $site_url . '/index.php';?>">
                    <img src="<?php echo $site_url . '/dist/images/Close.svg';?>" alt="close-icon">
                </a>
            </div>

                <img src="<?php echo $site_url . '/dist/images/meals/' . $meal['image'];?>" alt="<?php echo $meal['item_name']?>" class="food-detail-hero">

            <div class="food-detail-text">
            <form action="">
                <div class="inline">
                    <h1><?php echo $meal['item_name']?></h1>
                    <h1>$<?php echo $meal['price']?></h1>
                </div>
                <p><?php echo $meal['description']?></p>
                <h2>Ingredients</h2>
                <p>
                    <?php echo $meal['ingredients']?>
                </p>
                <br>
                <h2>Customize Spice Level</h2>
                <div class="flame-grid">
                    <div class="flame-image-div">
                        <img id="flameImg" src="<?php echo $site_url . '/dist/images/mild-flame.svg';?>" alt="flame">
                    </div>
                    <div class="flame-label">
                        <p>hot-</p>
                        <p>medium-</p>
                        <p>mild-</p>
                    </div>
                    <div class="slidecontainer">
                        <input type="range" min="1" max="3" value="1" class="slider mild" id="myRange">
                    </div>
                </div>
                <h2>Add protein (+$1)</h2>
                <div class="protein-grid">
                    <?php include_once __DIR__ . '/_components/food-details/protein.php'; ?>
                </div>
                <br>
                <h2>Select Dietary Needs</h2>
                <div class="checkbox-container">
                    <?php include_once __DIR__ . '/_components/food-details/diet-restrictions.php'; ?>
                </div>
                <br>
                <h2>Add a note</h2>
                <div>
                    <input class="notes-field" type="text" id="notes" name="notes" placeholder="Add Note...">
                    <br>                
                </div>

            </div>
            <div class="add-to-cart">
                <div class="stepper">
                    <div class="stepper-minus">-</div>
                        <h1 class="stepper-display">(..)</h1>
                    <div class="stepper-plus">+</div>
                </div>
                <a class="btn-dark" href="<?php echo site_url();?>/cart.php">
                <p>Add to cart </p>
                <p>$9 </p>

                </a>
            </div>
            </form>

        </div>

<script src="<?php echo site_url(); ?>/dist/scripts/stepper.js"></script>
<?php include_once __DIR__ . '/_components/footer.php'; ?>