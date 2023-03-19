<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$email = sanitize_value($_POST['email']);
$password = sanitize_value($_POST['password']);
$newUser = get_user_by_email_and_password($email, $password);

// Check there are no errors with our SQL statement
if ($newUser) {

    var_dump($newUser);
    echo "<br>";
    var_dump($user);
    // die;

    TODO:
    //update current user order, replace id with newuser id 
    $query = "UPDATE orders SET userID = {$newUser['id']} WHERE id = {$user['id']}";
    // var_dump($query);
    // die;
    $result = mysqli_query($db_connection, $query);
    delete_user_by_id($user['id']);
    $_SESSION['user'] = [
        'id' => $newUser['id'],
        'first_name' => $newUser['first_name'],
    ];

    // redirect_to('/checkout.php');   
} else {
    $error_message = 'User was not logged in: ' . mysqli_error($db_connection);
    // redirect_to('/auth/login.php?error=' . $error_message);
}




// if ($newUser) {
//     // Create a user array in the SESSION variable and assign values to it
//     $_SESSION['user'] = [
//         'id' => $user['id'],
//         'first_name' => $user['first_name'],
//         'last_name' => $user['last_name'],
//     ];
//     redirect_to('/checkout.php');
// } else {
//     $error_message = 'User was not updated: ' . mysqli_error($db_connection);
//     redirect_to('/auth/login?error=' . $error_message);
// }