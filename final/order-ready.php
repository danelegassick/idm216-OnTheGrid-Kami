<?php
include_once __DIR__ . '/app.php';
$page_title = 'Orders';
include_once __DIR__ . '/_components/header-close-confirmation.php';
$order_items = getOrderItems($user['id']);

$site_url = site_url();
$total_price=0;
?>

<!-- Order Items Section -->

<!-- Directions to Truck Button -->

<div class="wrapper-top">

    <!-- Top header -->
    <div class="header">
        <!-- this image below is just an empty space so we can 
        reuse this to have consistent headers, just replace the 
        empty png with a back icon or whatever is needed -->
        <img src="images/Icons/empty.png">
        <h1> </h1>
        <a href="<?php echo site_url();?>/orders.php">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">

            <g id="Layer_3">
                <line id="path2" fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="8.5" y1="41.5" x2="41.5" y2="8.5"/>
                <line id="path3" fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="41.5" y1="41.5" x2="8.5" y2="8.5"/>
            </g>
            </svg>
        </a>
    </div>

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
        <img src="images/tracker-ready.png" class="tracker">
    </div>

    <!-- QR Code -->
    <div class="QR-code">
        <img src="images/QR-code.png" class="QR-code-image">
        <img src="images/kami-logo-happy.svg" class="kami-logo-happy">
    </div>

</div>

<!-- Instructions Section -->
<div class="center">
<div class="instructions">
    Present the QR code at KAMI to <br> recieve your food!
</div>
</div>


<!-- Directions to Truck Button -->
<div class="align-center no-directions">
    <a href="" class="button longbtn"> 
        <p>Directions to truck</p>
        <img src="images/Icons/location.png">
    </a> 
</div>


   