<?php 

// $orderTotal = 0;
$quantity = intval($row['quantity']);
$meal_price = intval($row['meal_price']);
$price = $meal_price + intval($row['protein_price']);
$orderTotal += $price * $quantity;
$orderTotalPrice = number_format("{$orderTotal}", 2);
// $site_url = site_url();

if (isset($row['meal_name'])) {
    echo $row['meal_image'] . ' ' . $row['meal_name'] . ' ' . $row['meal_price'];
}
if (isset($row['side_name'])) {
    echo $row['side_image'] . ' ' . $row['side_name'] . ' ' . $row['side_price'];
}
if (isset($row['drink_name'])) {
    echo $row['drink_image'] . ' ' . $row['drink_name'] . ' ' . $row['drink_price'];
}
if (isset($row['protein_name'])) {
    echo $row['protein_name'] . ' ' . $row['protein_price'];
}
if (isset($row['restrictions_name'])) {
    echo $row['restrictions_name'];
}
if (isset($row['spice_level'])) {
    echo $row['spice_level'];
}

?>


<li class="cart-item">
    <div class="cart-content">
        <div class="cart-image">
            <img src="<?php echo site_url(); ?>/dist/images/meals/<?php echo $row['meal_image']?>" alt="" class="cart-item-image">
        </div>
        <div class="cart-item-text-content">
            <div class="cart-item-name-and-price">
                <h3 class="cart-item-name"><?php echo $row['meal_name']; ?></h3>
                <h3 class="cart-item-price"><?php echo "$" . $row['meal_price'];?></h3>
            </div>
            <!-- for toppingName, it is going to have to loop through the array -->
            <p class="cart-item-description"><?php echo $row['protein_name']; ?><?php echo "+ $" . $row['protein_price'];?></p>
            <p class="cart-item-description"><?php echo $row['restrictions_name']; ?></p>
            <div class="cart-item-actions">
                <div class="item-quantity">
                    <p class="quantity"><?php echo $quantity; ?></p>
                    <p class="quantity"><?php echo $price; ?></p>
                </div>
            </div>
        </div>
    </div>
</li>