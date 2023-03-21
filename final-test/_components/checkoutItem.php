<?php
    $site_url = site_url();
    $total_price=0.00;
while ($item = mysqli_fetch_array($cart_items)) {

    if (in_array($item['protein'], ["Beef", "Chicken", "Tofu"])) {
        $price = $item['price'] + 1.00;
        $price =number_format((float)$price, 2, '.', '');
        $protein = $item['protein'] . " (+$1)";
    } else {
        $price = $item['price'];
        $protein = $item['protein'];
    }

    $item_plus_quanity= $price*$item['quantity'];
    $item_plus_quanity =number_format((float)$item_plus_quanity, 2, '.', '');
    echo " 
    <div class='order-line-item'>
        <p>{$item['quantity']} {$item['name']}</p>
        <p>$ {$item_plus_quanity}</p>
    </div>
        ";
        $total_price += $item_plus_quanity;
        $item_plus_quanity= 0;
       
    }?>