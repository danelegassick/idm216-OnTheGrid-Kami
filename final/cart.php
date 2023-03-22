<?php
include_once __DIR__ . '/app.php';
$page_title = 'Cart';
include_once __DIR__ . '/_components/header-back.php';
?>
<body class="backgroundColor">
<?php 
// ($user['isGuest']==0) ? "success": redirect_to('/auth/login.php') ;
$cart_items = getCartItems($userOrder['id']);

if ($cart_items->num_rows == 0) :
    include __DIR__ . "/_components/empty-cart.php";
 else :
?>



<!--Wait time-->
<div class="cart">
<div class="wrapper">
    <div class="align-center wait-time">
        <img src="<?php echo site_url(); ?>/dist/images/cart-images/wait-time-penguin.png" alt="wait time" class="wait-time-image wait-time-penguin align-center"/>
        <!-- <h2 class="wait-time-text">
            The wait time is <span style="color:var(--accent-green)">13 mins</span>!
        </h2> -->
    </div>
    <h2 class="all-caps"> Your Order </h2>
</div>

<!-- LINE -->
<hr class="order-totals-hr hr-adj">

<div class="wrapper">
<!--Order items-->
    <div>
        <!-- Order information -->

        <?php include __DIR__ . '/_components/cartItem.php';?>

    </div>
</div>
    <!-- LINE -->
    <hr class="order-totals-hr">

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
<div >

    <!-- CTA Button -->
    <div class="align-center-flex button-background">
        <a href="
        
<?php 
if (isset($_SESSION['user'])) {
    echo site_url() . '/checkout.php';
  }
  else {
    echo site_url() . '/auth/login.php'; 
  }
?>
        
        
        " class="btn-dark longbtn"> 
            <p>
<?php 
if (isset($_SESSION['user'])) {
    echo 'Checkout';
  }
  else {
    echo 'Log in to checkout'; 
  }
?>                
</p>
            <p>$ <?php echo(number_format((float)$total_price, 2, '.', '')); ?></p>
        </a> 
    </div>  
          <!-- backdrop of bottom fixed to bottom -->
</div>
<div class="bottom-space"> </div>
</div>


<?php include_once __DIR__ . '/_components/footer.php'; 

endif;
?>

