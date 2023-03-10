<?php
include_once __DIR__ . '/app.php';
$page_title = 'Cart';
include_once __DIR__ . '/_components/header-back.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
?>

<div class="top-space"> </div>
<!--Wait time-->
<div class="wrapper">
    <div class="align-center">
        <img src="<?php echo site_url(); ?>/dist/images/cart-images/wait-time-penguin.png" alt="wait time" class="wait-time-penguin"/>
        <!-- <h2 class="wait-time-text">
            The wait time is <span style="color:var(--accent-green)">13 mins</span>!
        </h2> -->
    </div>
    <h2 class="all-caps"> Your Order </h2>
</div>

<!-- LINE -->
<span class="line text-line text-line--top"></span>

<div class="wrapper">
<!--Order items-->
    <div>
        <!-- Order information -->
        <div class="cart-order-item">
            <div class="cart-order-img">
                <img src="<?php echo site_url(); ?>/dist/images/cart-images/bibimbap.png" alt="Bibimbap image" class="cart-item-image">
                <p class="quantity">1</p>
            </div>
            <div class="cart-order-text">
                <div>
                    <h2>Bibimbap</h2>
                    <p> Beef (+$1)</p>
                    <p> Medium Spice</p>
                </div>
                <div>
                    <h2> $9 </h2>
                </div>
            </div>
        </div>
        <!-- Note input -->
        <div>
            <input class="notes-field" type="text" id="note" name="note" placeholder="Add note here...">
        </div>
        <!--Edit/delete-->
        <div class="edit-delete">
            <a href=""> Delete </a>
            <a href=""> Edit Item </a>
        </div>

    </div>
</div>
    <!-- LINE -->
    <span class="line"></span>

<div class="wrapper">
    <div class="align-center">
        <h2>
            Want to include any utensils?
        </h2>
    </div>
        <div class="all-utensils">
            <button class="utensil-btn">
                <img src="<?php echo site_url(); ?>/dist/images/cart-images/chopsticks.png" alt="chopstick" class="utensil-img-resize">
                <p>Chopsticks</p>
            </button>
            <button class="utensil-btn">
                <img src="<?php echo site_url(); ?>/dist/images/cart-images/fork.png" alt="fork" class="utensil-img-resize">
                <p>Forks</p>
            </button>
            <button class="utensil-btn">
                <img src="<?php echo site_url(); ?>/dist/images/cart-images/napkin.png" alt="napkin" class="utensil-img-resize">
                <p>Napkins</p>
            </button>
        </div>
</div>
<div class="button-background">

    <!-- CTA Button -->
    <div class="align-center-flex">
        <a href="
        
<?php 
if (isset($_SESSION['user'])) {
    // echo 'Cool Menu Here' . $_SESSION['user']['first_name'];
    echo site_url() . '/checkout.php';
  }
  else {
    echo site_url() . '/auth/login.php'; 
  }
?>
        
        
        " class="btn-dark"> 
            <p>
<?php 
if (isset($_SESSION['user'])) {
    // echo 'Cool Menu Here' . $_SESSION['user']['first_name'];
    echo 'Checkout';
  }
  else {
    echo 'Log in to checkout'; 
  }
?>                
</p>
            <p> $9 </p>
        </a> 
    </div>  
          <!-- backdrop of bottom fixed to bottom -->
</div>
<div class="bottom-space"> </div>

<?php include_once __DIR__ . '/_components/footer.php'; ?>