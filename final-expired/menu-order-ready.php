<?php
include_once __DIR__ . '/app.php';
$page_title = 'KAMI';
include_once __DIR__ . '/_components/header.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
?>
<div class="menu">
<div class="wait-time">
            <!-- **********THIS IS THE THING THAT CHANGED********** -->
            <a href="<?php echo site_url(); ?>/order-ready.html">
                <img class="wait-time-image" src="<?php echo site_url(); ?>/dist/images/order-ready.svg" alt="">
            </a>
            <!-- ^^^^^^^^^^THIS IS THE THING THAT CHANGED^^^^^^^^^^ -->
</div>
<div class="kami-today">
    <h4>Kami today</h4>
    <hr>
</div>
<div class="carousel">
    <div class="todays-pick">
        <img src="<?php echo site_url() . '/dist/images/card-food.png';?>" alt="Tteok-bok-ki" class="card-img">
        <div class="pick">
            <img src="<?php echo site_url() . '/dist/images/sparkles.svg';?>" alt="sparkles" class="icon-small inline-block">
            <p class="inline-block">Todays pick</p>
        </div>
        <div class="card-content">
            <h4>Tteok bok ki</h4>
            <h4>$8</h4>
        </div>
    </div>
            <div class="pagination">
                <span class="pagination-active"></span>
                <span></span>
                <span></span>
            </div>
</div>
        <div class="menu-sections">
            <h4>Meals<hr class="active-menu"></h4>
            <h4><a href="<?php echo site_url() . '/sides.php';?>">Sides</a><hr></h4>
            <h4><a href="<?php echo site_url() . '/drinks.php';?>">Drinks</a><hr></h4>
        </div>
        <div class="food-section">
            <?php include_once __DIR__ . '/_components/meals-menu.php'; ?>
        </div>
</div>

<div class="footer-index">
<br>
<img src="<?php echo site_url(); ?>/dist/images/truck-footer.svg" alt="truck footer">
    <br>
</div>

<?php include_once __DIR__ . '/_components/footer.php'; ?>