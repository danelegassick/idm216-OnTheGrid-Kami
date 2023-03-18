<?php
include_once __DIR__ . '/app.php';
$page_title = 'Cart';
include_once __DIR__ . '/_components/header-back.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
?>


<!--Wait time-->
<div class="wrapper">
    <div class="align-center">
        <img src="<?php echo site_url(); ?>/dist/images/cart-images/wait-time-penguin.png" alt="wait time" class="wait-time-penguin align-center"/>
        <!-- <h2 class="wait-time-text">
            The wait time is <span style="color:var(--accent-green)">13 mins</span>!
        </h2> -->
    </div>
    <h2 class="all-caps"> Your Order </h2>
</div>

<!-- LINE -->
<span class="line text-line text-line--top"></span>

<div class="wrapper">
<!--Order items-->
    <div>
        <!-- Order information -->
        <div class="cart-order-item">
            <div class="cart-order-img">
                <img src="<?php echo site_url(); ?>/dist/images/cart-images/bibimbap.png" alt="Bibimbap image" class="cart-item-image">
                <p class="quantity">1</p>
            </div>
            <div class="cart-order-text">
                <div>
                    <h2 class="order-margin-top">Bibimbap</h2>
                    <p class="order-info"> Beef (+$1)</p>
                    <p class="order-info"> Medium Spice</p>
                </div>
                <div>
                    <h2 class="order-margin-top"> $9 </h2>
                </div>
            </div>
        </div>
        <!-- Note input -->
        <div>
            <input class="notes-field" type="text" id="note" name="note" placeholder="Add note here...">
        </div>
        <!--Edit/delete-->
        <div class="edit-delete">
            <a href=""> 
            <svg xmlns="http://www.w3.org/2000/svg"  class="edit-delete-icon" width="21" height="21" viewBox="0 0 24 24"><path fill="#eb4e37" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z"/></svg>            
            Delete
        </a>

            <a href=""> 
                <svg xmlns="http://www.w3.org/2000/svg" class="edit-delete-icon" width="21" height="21" viewBox="0 0 24 24"><path fill="currentColor" d="M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM4 21q-.425 0-.713-.288T3 20v-2.825q0-.2.075-.388t.225-.337l10.3-10.3l4.25 4.25l-10.3 10.3q-.15.15-.337.225T6.825 21H4ZM14.325 9.675l-.7-.7l1.4 1.4l-.7-.7Z"/></svg>    
                Edit
            </a>
        </div>

    </div>
</div>
    <!-- LINE -->
    <span class="line"></span>

<div class="wrapper">
    <div class="align-center">
        <h2>
            Want to include any utensils?
        </h2>
    </div>
        <div class="all-utensils">
            <button class="utensil-btn">
                <img src="<?php echo site_url(); ?>/dist/images/cart-images/chopsticks.png" alt="chopstick" class="utensil-img-resize">
                <p>Chopsticks</p>
            </button>
            <button class="utensil-btn">
                <img src="<?php echo site_url(); ?>/dist/images/cart-images/fork.png" alt="fork" class="utensil-img-resize">
                <p>Forks</p>
            </button>
            <button class="utensil-btn">
                <img src="<?php echo site_url(); ?>/dist/images/cart-images/napkin.png" alt="napkin" class="utensil-img-resize">
                <p>Napkins</p>
            </button>
        </div>
</div>
<div class="button-background">

    <!-- CTA Button -->
    <div class="align-center-flex">
        <a href="
        
<?php 
if (isset($_SESSION['user'])) {
    // echo 'Cool Menu Here' . $_SESSION['user']['first_name'];
    echo site_url() . '/checkout.php';
  }
  else {
    echo site_url() . '/auth/login.php'; 
  }
?>
        
        
        " class="btn-dark longbtn"> 
            <p>
<?php 
if (isset($_SESSION['user'])) {
    // echo 'Cool Menu Here' . $_SESSION['user']['first_name'];
    echo 'Checkout';
  }
  else {
    echo 'Log in to checkout'; 
  }
?>                
</p>
            <p> $9 </p>
        </a> 
    </div>  
          <!-- backdrop of bottom fixed to bottom -->
</div>
<div class="bottom-space"> </div>

<?php include_once __DIR__ . '/_components/footer.php'; ?>