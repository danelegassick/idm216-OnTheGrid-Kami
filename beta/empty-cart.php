

<?php
include_once __DIR__ . '/app.php';
$page_title = 'Empty Cart';
include_once __DIR__ . '/_components/header-back.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
?>


<div class="orders-not-signed-in">
    <img src="<?php echo site_url();?>/dist/images/kami-logo.svg" alt="" class="greyscale-cook">
    <h1 class="sign-up-cta">Your cart is empty</h1>
    <a href="<?php echo site_url(); ?>/index.php" class="button btn-dark">Start Order</a>
</div>

<?php include_once __DIR__ . '/_components/footer.php'; ?>