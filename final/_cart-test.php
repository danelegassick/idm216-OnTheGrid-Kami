<?php
include_once 'app.php';

$orderTotal = 0;

$query = "SELECT orders.id, 
orders.quantity, 
users.first_name, 
meals.item_name AS meal_name, 
meals.price AS meal_price, 
meals.image AS meal_image, 
GROUP_CONCAT(DISTINCT protein.name SEPARATOR ', ') AS protein_name, 
SUM(DISTINCT protein.price) AS protein_price, 
GROUP_CONCAT(DISTINCT restrictions.name SEPARATOR ', ') AS restrictions_name, 
spice.spice_level, sides.item_name AS side_name, 
sides.price AS side_price, 
sides.image AS side_image, 
drinks.item_name AS drink_name, 
drinks.price AS drink_price, 
drinks.image AS drink_image\n"

    . "FROM orders\n"

    . "INNER JOIN users ON orders.userID = users.id\n"

    . "LEFT JOIN meals ON orders.mealID = meals.id\n"

    . "LEFT JOIN protein ON FIND_IN_SET(protein.id, orders.proteinID) > 0\n"

    . "LEFT JOIN restrictions ON FIND_IN_SET(restrictions.id, orders.restrictionID) > 0\n"

    . "LEFT JOIN spice ON orders.spiceID = spice.id\n"

    . "LEFT JOIN sides ON orders.sideID = sides.id\n"

    . "LEFT JOIN drinks ON orders.drinkID = drinks.id\n"
    
    . "WHERE users.id = '{$currentUser['id']}'"

    . "GROUP BY orders.id, orders.quantity, users.first_name, meals.item_name, meals.price, meals.image, spice.spice_level, sides.item_name, sides.price, sides.image, drinks.item_name, drinks.price, drinks.image";


 
$result = mysqli_query($db_connection, $query);

if ($result === false) {
    echo 'Query failed: ' . mysqli_error($db_connection);
} elseif ($result->num_rows > 0) {
    echo '<ul class="cart-item-list">';
    while($row = $result->fetch_assoc()) {
        include '_components/cart/_cart-item.php';
    } // End while loop
    echo '</ul>';
} else {
    echo 'No results found.';
}

echo "$" . $orderTotal;

?>