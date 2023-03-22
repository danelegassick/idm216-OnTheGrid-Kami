<?php
include_once __DIR__ . '/app.php';
$page_title = 'Orders';
include_once __DIR__ . '/_components/header.php';
$order_items = getOrderItems($user['id']);
?>
<div class="orders-container">
   <?php include __DIR__ . '/_components/archivedOrders.php'; ?>
   </div>
<?php include_once __DIR__ . '/_components/footer.php'; ?>

   