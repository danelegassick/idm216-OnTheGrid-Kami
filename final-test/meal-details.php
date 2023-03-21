<?php
include_once __DIR__ . '/app.php';
$page_title = 'KAMI';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get recipes data from database
// SELECT * FROM menu WHERE category = "meal" ORDER BY name
$query = "SELECT * FROM menu WHERE id = {$_GET['id']}";
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

  <form action="<?php echo site_url();?>/_includes/addToOrder.php" method="POST">

    <div class="meal-details-container">

        <div class="image-description-container">

                    <img class="food-detail-hero" src="<?php echo $meal['imageUrl'];?>" alt="<?php echo $meal['name']?>">

                    <div class="item-description">

                        <div class="inline">
                            <h1><?php echo $meal['name']?></h1>
                            <h1>$<?php echo $meal['price']?></h1>
                        </div>

                        <div class="description-and-ingredients">
                              <p><?php echo $meal['description']?></p>

                          <h2>Ingredients</h2>
                              <p><?php echo $meal['ingredients']?></p>
                        </div>

                    </div>
        <br>
        </div>

        <?php if($meal['category'] !== "drink") : ?>

        
        <div class="customization-container">
                    <!-- <div class="spice-container"> -->
                        <div class="spice-title title-container">
                          <h2>Customize Spice Level</h2>
                        </div>
                        
                        <div class="flame-grid customization-field">

                            <div class="flame-image-div">
                                <img id="flameImg" src="<?php echo $site_url . '/dist/images/mild-flame.svg';?>" alt="flame">
                            </div>  

                            <div class="flame-label">
                                <p>hot-</p>
                                <p>medium-</p>
                                <p>mild-</p>
                            </div>
                    
                            <div class="slidecontainer">
                                <input type="range" min="1" max="3" value="1" class="slider mild" id="myRange" name="spice_level">
                            </div>
                          
                        </div>

                        <?php endif; ?>


                    <!-- </div> -->

                    <?php if($meal['category'] == "meal")  : ?>

        
                    <!-- <div class="protein-container"> -->
                        <div class="protein-title title-container">
                            <h2 class="food-detail-title">Add protein (+$1)</h2>
                        </div>


            <div class="protein-grid customization-field">

                    <!-- protein inputs -->
                <div id='ck-button'>
                    <label for="chicken<?php echo $meal['id']; ?>">
                        <input type="radio" value="Chicken"  id="chicken<?php echo $meal['id']; ?>" name="protein">
                        <span>
                            <img src='<?php echo site_url(); ?>/dist/images/protein-chicken.svg' alt='chicken'>
                            <p>Chicken</p>
                        </span>
                    </label>
                </div>

                <div id='ck-button'>
                    <label for="beef<?php echo $meal['id']; ?>">
                        <input type="radio" value="Beef"  id="beef<?php echo $meal['id']; ?>" name="protein">
                        <span>
                            <img src='<?php echo site_url(); ?>/dist/images/protein-beef.svg' alt='beef'>
                            <p>Beef</p>
                        </span>
                    </label>
                </div>

                <div id='ck-button'>
                    <label for="tofu<?php echo $meal['id']; ?>">
                        <input type="radio" value="Tofu"  id="tofu<?php echo $meal['id']; ?>" name="protein">
                        <span>
                            <img src='<?php echo site_url(); ?>/dist/images/protein-tofu.svg' alt='tofu'>
                            <p>Tofu</p>
                        </span>
                    </label>
                </div>

            </div>

            <?php endif; ?>

                        
                    <br>
                    <!-- </div> -->

                    <!-- <div class="diet-container"> -->

                            <!-- <div class="diet-title title-container">
                              <h2 class="food-detail-title">Select Dietary Needs</h2>
                            </div>
                            <div class="checkbox-container customization-field">
                            <?php include_once __DIR__ . '/_components/food-details/diet-restrictions.php'; ?>
                            </div> -->
                    <br>
                    <!-- </div> -->

                    <!-- <div class="note-container"> -->

                    <div class="note-title title-container">
                        <h2 class="food-detail-title">Add a note</h2>
                    </div>
                    
                    <div class="note-box customization-field">
                        <input class="notes-field" type="text" id="notes" name="note" placeholder="Add Note...">
                    </div>
                    
                    <input name="menu_id" value="<?php echo $meal['id']; ?>" type="hidden"/>

                    <input name="order_id" value="<?php echo $userOrder['id']; ?>" type="hidden"/>

                    <input id="quantity-input<?php echo $meal['id']; ?>"name="quantity" value="1" type="hidden"/>
                    <!-- </div> -->

        <br>           
        </div>
<!-- ADD TO CART -->
            <div class="add-to-cart">
                    <div class="stepper">
                        <div class="stepper-minus">-</div>
                        <h1 class="stepper-display">(..)</h1>
                        <div class="stepper-plus">+</div>
                    </div>
                    <button type="submit" class="btn-dark" href="<?php echo site_url();?>/cart.php">
                      <p>Add to cart </p>
                      <p>$ <?php echo $meal['price']; ?></p>
                    </a>
            </div>
        </div>
    </div>
  </form>
</div>      
<script src="<?php echo site_url(); ?>/dist/scripts/stepper.js"></script>

<?php include_once __DIR__ . '/_components/footer.php'; ?>