<?php
include_once __DIR__ . '/app.php';
$page_title = 'Orders';
include_once __DIR__ . '/_components/header.php';
$order_items = getOrderItems($user['id']);



?>



<div class="orders-container">

<?php
if ($order_items->num_rows == 0) :
   ?>
   

<div class="orders-not-signed-in">
          <img src="<?php echo site_url(); ?>/dist/images/orders-image.svg" alt="" class="greyscale-cook">
          <h1 class="sign-up-cta">To see past orders here,<br>sign in or sign up!</h1>
</div>

<?php endif; ?>
   
   <?php include __DIR__ . '/_components/archivedOrders.php'; ?>
   </div>
<?php include_once __DIR__ . '/_components/footer.php'; ?>
