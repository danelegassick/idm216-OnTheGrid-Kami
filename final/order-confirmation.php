<?php
include_once __DIR__ . '/app.php';
$page_title = 'Orders';
include_once __DIR__ . '/_components/header-close-confirmation.php';
$order_items = getOrderItems($user['id']);

$site_url = site_url();
$total_price=0;
?>
<div class="wrapper-top confirmation-block">



    <!-- Pickup Time & Order # -->
    <div class="align-center">
        <div class="center-contents">
            <h2 class="">
                PICKUP TIME
            </h2>
            <h3 class="">
                12:30pm
            </h3>
            <div class="order-number">
                Order #: 123456
            </div>
        </div>
    </div>

    <!-- Progress Tracker -->
    <div class="">
        <img src="<?php echo site_url(); ?>/images/tracker-received.png" class="tracker">
    </div>

    <!-- Big Checkmark -->
    <div class="big-check">
        <img src="<?php echo site_url(); ?>/images/kami-logo-happy.svg" class="">
    </div>

</div>

<!-- Instructions Section -->
<div class="center">
<div class="instructions">
    Your order has been received! <br>
    A QR code will appear when your order is ready.
    Present it during pickup.
</div>
</div>

<!-- Order Items Section -->

<!-- Directions to Truck Button -->
<div class="align-center no-directions">
    <a href="<?php echo site_url();?>/orders.php" class="button longbtn">
      <p class="text-align">View Your Order</p>
    <a>
</div>

<div class="button-background no-directions"></div>

<?php include_once __DIR__ . '/_components/footer.php'; ?>

   