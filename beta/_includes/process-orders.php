<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability

//required values
$userID_value = sanitize_value($_POST['userID']);

// optional values
// $protein_value = isset($_POST['proteinID']) ? sanitize_value($_POST['proteinID']) : 0;
$protein_value = isset($_POST['proteinID']) ? sanitize_value(implode(",", $_POST['proteinID'])) : 0;
$restriction_value = isset($_POST['restrictionID']) ? sanitize_value($_POST['restrictionID']) : 0;
$spice_value = isset($_POST['spiceID']) ? sanitize_value($_POST['spiceID']) : 0;
$meal_value = isset($_POST['mealID']) ? sanitize_value($_POST['mealID']) : 0;
$side_value = isset($_POST['sideID']) ? sanitize_value($_POST['sideID']) : 0;
$drink_value = isset($_POST['drinkID']) ? sanitize_value($_POST['drinkID']) : 0;
// var_dump($protein_value);
// die;

$query = "INSERT INTO orders (userID, mealID, proteinID, spiceID, restrictionID, sideID, drinkID) VALUES ('{$userID_value}', '{$meal_value}', '{$protein_value}', '{$restriction_value}', '{$spice_value}', '{$side_value}', '{$drink_value}')";
$result = mysqli_query($db_connection, $query);


if ($result) {
    $error_message = 'info was added';
    //redirect to cart page
} 
else {
    $error_message = 'info was not added';
    // redirect_to('/admin/recipes?error=' . $error_message);
}

?>