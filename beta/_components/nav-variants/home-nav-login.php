<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>

        <div class="menu__box">
            <div class="menu-swirls">
                <img src="<?php echo site_url() . '/dist/images/swirl-beige.png';?>" alt="swirl" class="swirl">
                <img src="<?php echo site_url() . '/dist/images/swirl-beige.png';?>" alt="swirl" class="swirl">
                <img src="<?php echo site_url() . '/dist/images/swirl-beige.png';?>" alt="swirl" class="swirl">
                <img src="<?php echo site_url() . '/dist/images/swirl-beige.png';?>" alt="swirl" class="swirl">
            </div>
            <div class="menu__intro">
                <div>
                    <h1 class="menu__greeting">Hi <?php echo $_SESSION['user']['first_name']; ?>!</h1>
                    <a href="<?php echo site_url() . '/auth/logout.php';?>" class="menu__item_signin">Sign Out</a>
                </div>
            </div>
            <ul class="menu__list">
                    <?php
                        //check if main_navigation exists
                        if (isset($main_navigation)) {
                            // loop through navigation array and output html
                            foreach ($main_navigation as $item_array) {
                                echo "<li><a class='menu__item' href='$item_array[url]'>
                                <span>$item_array[title]</span><img class='menu__icon' src='$item_array[icon]' alt='$item_array[title]'></a></li>";
                            }
                        }
                        
                    ?>
            </ul>
            <div class="menu__quick_links">
                    <a href="#">   
                        <img class="menu__icon" src="<?php echo site_url() . '/dist/images/yelp.svg';?>" alt="yelp">
                    </a>
                    <a href="#">   
                        <img class="menu__icon" src="<?php echo site_url() . '/dist/images/insta.svg';?>" alt="instagram">
                    </a>
                    <a href="#">   
                        <img class="menu__icon" src="<?php echo site_url() . '/dist/images/social.svg';?>" alt="social-link">
                    </a>
            </div>
        </div>
    </div>

    <div><h1 class="nav-logo"><?php echo $page_title; ?></h1></div>
    <div class="nav-cart"><a href="<?php echo site_url();?>/empty-cart.php"><img src="<?php echo site_url();?>/dist/images/cart.svg" alt="cart-icon"></a></div>