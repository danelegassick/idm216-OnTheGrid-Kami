<?php
include_once __DIR__ . '/app.php';
$page_title = 'Checkout';
include_once __DIR__ . '/_components/header-back.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
?>
<div class="checkout-main">
<div class="pickup-line">
            <h1>Choose your pickup time!</h1>
            <img class="cut-off-logo" src="<?php echo site_url(); ?>/dist/images/cut-off-logo.png" alt="">
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
                <h2>JERVO'S ORDER</h2>
            </div>
            <hr class="order-totals-hr">
            <div class="order-line-item">
                <p>Bibimbap</p>
                <p>$11</p>
            </div>
            <div class="order-line-item">
                <p>2 Kimchi</p>
                <p>$2</p>
            </div>
            <hr class="order-totals-hr">
            <div class="order-line-item">
                <p>Subtotal</p>
                <p>$13</p>
            </div>
            <div class="order-line-item tip-selection">
                <p class="tip-first-label">Tip</p>
                <label class="tip-option-button">
                    <input type="radio" name="tip-option-radio" class="tip-option-radio"/>
                    <span class="tip-option-text">15</span><span class="tip-percent">%</span>
                </label>
                <label class="tip-option-button">
                    <input type="radio" name="tip-option-radio" class="tip-option-radio" checked="true"/>
                    <span class="tip-option-text">18</span><span class="tip-percent">%</span>
                </label>
                <label class="tip-option-button">
                    <input type="radio" name="tip-option-radio" class="tip-option-radio"/>
                    <span class="tip-option-text">20</span><span class="tip-percent">%</span>
                </label>
                <label class="tip-option-button">
                    <input type="radio" name="tip-option-radio" class="tip-option-radio"/>
                    <span class="tip-option-image"><img class="custom-tip" src="<?php echo site_url(); ?>/dist/images/edit-tip.svg" alt="edit tip icon"></span><span class="tip-percent">%</span>
                </label>
                <p>$2.16</p>
            </div>
            <hr class="order-totals-hr">
            <div class="order-line-item">
                <h1>Total</h1>
                <h1>$15.16</h1>
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
            <p>+ add new card</p>
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
        <div class="add-to-cart align-center-flex">            
            <a class="btn-dark" href="<?php echo site_url();?>/confirming-loading.php">
                <p>Checkout </p>
                <p> $15.16 </p>
        </a>
        </div>
</div>
<script src="<?php echo site_url(); ?>/dist/scripts/pickuptime.js"></script>

<?php include_once __DIR__ . '/_components/footer.php'; ?>