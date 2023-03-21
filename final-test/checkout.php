<?php
include_once __DIR__ . '/app.php';
$page_title = 'Checkout';
include_once __DIR__ . '/_components/header.php';
($user['isGuest']==0) ? "success": redirect_to('/auth/login.php') ;
$cart_items = getCartItems($userOrder['id']);

?>


<div class="checkout-main">
<div class="pickup-line">
            <h1>Choose your pickup time!</h1>
            <img class="cut-off-logo" src="<?php echo site_url(); ?>/dist/images/cut-off-logo.png" alt="logo">
        </div>
        <span class="custom-select">
            <select>    
                <option value="0">
                Select your pickup time!
                </option>
                <option value="1" id='option-1'></option>  
                <option value="2" id='option-2'></option>
                <option value="3" id='option-3'></option>
            </select>
        </span>
        <div class="order-totals">
            <div class="order-title">
                <h2 class="all-caps">YOUR ORDER</h2>
            </div>
            <hr class="order-totals-hr">
            <?php include __DIR__ . '/_components/checkoutItem.php';?>

            <hr class="order-totals-hr">
            <div class="order-line-item">
                <p>Subtotal</p>
                <p>$ <?php echo(number_format((float)$total_price, 2, '.', ''))?></p>
            </div>
            <div class="order-line-item tip-selection">
                <p class="tip-first-label">Tip</p>
                <label class="tip-option-button" onclick= calculateTip(0.15,<?php echo($total_price)?>)>
                    <input type="radio" name="tip-option-radio" class="tip-option-radio"/>
                    <span class="tip-option-text">15</span><span class="tip-percent">%</span>
                </label>
                <label class="tip-option-button" onclick= calculateTip(0.18,<?php echo($total_price)?>)>
                    <input type="radio" name="tip-option-radio" class="tip-option-radio" />
                    <span class="tip-option-text">18</span><span class="tip-percent">%</span>
                </label>
                <label class="tip-option-button" onclick= calculateTip(0.20,<?php echo($total_price)?>)>
                    <input type="radio" name="tip-option-radio" class="tip-option-radio"/>
                    <span class="tip-option-text">20</span><span class="tip-percent">%</span>
                </label>
                <p id="tipHook">$0.00</p>
            </div>


            <hr class="order-totals-hr">
            <div class="order-line-item">
                <h1>Total</h1>
                <h1>$<span id="priceHook2"><?php echo(number_format((float)$total_price, 2, '.', ''))?></span></h1>
            </div>
            <hr class="order-totals-hr">
        </div>
        <div class="select-payment">
            <h2>Select your payment</h2>
            <div class="current-credit">
                <img src="<?php echo site_url(); ?>/dist/images/visa.svg" alt="visa logo">
                <div class="credit-details">
                    <h2>**** **** **** 3254</h2>
                    <p><i>VISA</i></p>
                </div>
            </div>
            <p>+ Add New Card</p>
            <div class="external-payment-options">
                <button class="external-payment">
                    <img class="payment-method-image" src="<?php echo site_url(); ?>/dist/images/venmo.svg" alt="venmo">
                    <p class="payment-method-text">Venmo</p>
                </button>
                <button class="external-payment">
                    <img class="payment-method-image" src="<?php echo site_url(); ?>/dist/images/applepay.svg" alt="">
                    <p class="payment-method-text">Apple Pay</p>
                </button>
            </div>
        </div>


        <form action="<?php echo site_url();?>/_includes/archiveOrder.php" method="POST">
            <input name="order_id" value="<?php echo $userOrder['id']; ?>" type="hidden"/>
            <input name="final_price" id="final_price"value="<?php echo $total_price ?>" type="hidden"/>
            <div class="add-to-cart align-center-flex">            
                <button class="btn-dark" type="submit">
                    <p>Checkout </p>
                    <p >$<span id="priceHook1"><?php echo(number_format((float)$total_price, 2, '.', ''))?></span></p>
                </button>
            </div>
        </form>
</div>
<script src="<?php echo site_url(); ?>/dist/scripts/pickuptime.js"></script>

<script src="<?php echo site_url(); ?>/dist/scripts/main.js"></script>

</div>