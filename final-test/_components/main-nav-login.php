<?php

    $main_navigation = [
      [
        'title' => 'Home',
        'url' => site_url() . '/index.php',
        'icon' => site_url() . '/dist/images/Home.svg'
    ],
    [
      'title' => 'Orders',
      'url' => site_url() . "/orders.php",
      'icon' => site_url() . '/dist/images/Orders.svg'
    ],

    ];

?>

<header>
<div class="nav-background">
<nav>
  <!-- <div class="hamburger-menu">
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

    <div class="nav-logo"><h1>KAMI</h1></div>
    <div class="nav-cart"></div> -->
    <?php 
    include_once __DIR__ . '/nav-variants/home-nav-login.php'; 
    ?>
</nav>
</div>
</header>