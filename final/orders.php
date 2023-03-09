<?php
include_once __DIR__ . '/app.php';
$page_title = 'Orders';
include_once __DIR__ . '/_components/header.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
?>


<?php 
if (isset($_SESSION['user'])) {
    // echo 'Cool Menu Here' . $_SESSION['user']['first_name'];
    include __DIR__ . '/_components/orders/order-logged-in.php';
  }
  else {
    include __DIR__ . '/_components/orders/order-logged-out.php'; 
  }
?>

<?php include_once __DIR__ . '/_components/footer.php'; ?>