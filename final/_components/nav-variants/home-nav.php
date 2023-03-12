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
                    <h1 class="menu__greeting">Hi there!</h1>
                    <a href="<?php echo site_url() . '/auth/login.php';?>" class="menu__item_signin">Sign In or Sign Up</a>
                </div>
            </div>
            <ul class="menu__list">
                    <?php
                        //check if main_navigation exists
                        if (isset($main_navigation)) {
                            // loop through navigation array and output html
                            foreach ($main_navigation as $item_array) {
                                echo "<li>
                                <a class='menu__item' href='$item_array[url]'>
                                <span>$item_array[title]</span>
                                <img class='menu__icon' src='$item_array[icon]' alt='$item_array[title]'>
                                </a>
                                </li>";
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

    <div>
        <h1 class="nav-logo"><?php echo $page_title; ?></h1>
    </div>

<div class="nav-cart">
    <a href="<?php echo site_url();?>/empty-cart.php">
        <!-- <img src="<?php echo site_url();?>/dist/images/cart.svg" alt="cart-icon"> -->
        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0_476_7667" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
        <rect width="28" height="28" fill="#D9D9D9"/>
        </mask>
        <g mask="url(#mask0_476_7667)">
        <path class="cart-path" d="M8.16663 25.6668C7.52496 25.6668 6.97585 25.4386 6.51929 24.982C6.06196 24.5247 5.83329 23.9752 5.83329 23.3335C5.83329 22.6918 6.06196 22.1423 6.51929 21.685C6.97585 21.2284 7.52496 21.0002 8.16663 21.0002C8.80829 21.0002 9.3574 21.2284 9.81396 21.685C10.2713 22.1423 10.5 22.6918 10.5 23.3335C10.5 23.9752 10.2713 24.5247 9.81396 24.982C9.3574 25.4386 8.80829 25.6668 8.16663 25.6668ZM19.8333 25.6668C19.1916 25.6668 18.6425 25.4386 18.186 24.982C17.7286 24.5247 17.5 23.9752 17.5 23.3335C17.5 22.6918 17.7286 22.1423 18.186 21.685C18.6425 21.2284 19.1916 21.0002 19.8333 21.0002C20.475 21.0002 21.0245 21.2284 21.4818 21.685C21.9384 22.1423 22.1666 22.6918 22.1666 23.3335C22.1666 23.9752 21.9384 24.5247 21.4818 24.982C21.0245 25.4386 20.475 25.6668 19.8333 25.6668ZM7.17496 7.00016L9.97496 12.8335H18.1416L21.35 7.00016H7.17496ZM4.22913 19.8335L7.69996 13.5335L3.49996 4.66683H1.16663V2.3335H4.95829L6.06663 4.66683H25.3166L19.5125 15.1668H9.44996L8.16663 17.5002H22.1666V19.8335H4.22913Z" fill="#171616"/>
        </g>
        </svg>

        <span>Cart</span>
    </a>
</div>