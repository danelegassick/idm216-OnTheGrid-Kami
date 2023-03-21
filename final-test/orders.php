<?php
include_once __DIR__ . '/app.php';
$page_title = 'Orders';
include_once __DIR__ . '/_components/header.php';
$order_items = getOrderItems($user['id']);
?>

   <?php include __DIR__ . '/_components/archivedOrders.php'; ?>
   
<?php include_once __DIR__ . '/_components/footer.php'; ?>

   