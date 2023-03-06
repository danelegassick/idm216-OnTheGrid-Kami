<?php
include_once __DIR__ . '/app.php';
ob_start();

$site_url = site_url();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>/dist/styles/beta.css" />
    <title>Order Confirmation</title>
</head>
<body>
    
<div class="wrapper-top">

    <!-- Top header -->
    <header class="header">
        <!-- this image below is just an empty space so we can 
        reuse this to have consistent headers, just replace the 
        empty png with a back icon or whatever is needed -->
        <img src="images/Icons/empty.png">
        <h1>Thank you!</h1>
        <a href="menu-order-ready.php"><img src="images/Icons/close.png"></a>
    </header>

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
        <img src="images/tracker-received.png" class="tracker">
    </div>

    <!-- Big Checkmark -->
    <div class="big-check">
        <img src="images/BigCheck.png" class="">
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
<div class="order-name">
   <h2>JERVO'S ORDER</h2> 
</div>
<hr>

<div class="wrapper-bottom">

    <div class="order-item">
        <img src="images/cart-thumbnail.png" class="thumbnail">
        
        <div class="text-block">
            <div class="food-name">Bibimbap</div>
            <p>Beef ($1)</p>
            <p>Medium Spice</p>
        </div>
        
        <div class="price food-name">$11</div>
    </div>

</div>

<!-- Directions to Truck Button -->
<div class="align-center">
    <a href="" class="button longbtn"> 
        <p>Directions to truck</p>
        <img src="images/Icons/location.png">
    </a> 
</div>

<div class="button-background"></div>

<!-- not sure how to make the button background 
(white section behind to cover overlapping text)
maybe z index, but everytime i've tried that i mess things up -->

</body>
<footer>
</footer>
</html>