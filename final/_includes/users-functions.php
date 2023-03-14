<?php

// get all users from the database

function get_users()
{
    global $db_connection;
    $query = 'SELECT * FROM users';
    $result = mysqli_query($db_connection, $query);
    return $result;
}


/**
 * Insert a user into the database
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @return object - mysqli result
 */

function add_user ($first_name, $last_name, $email, $password)
{
    global $db_connection;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $query = 'INSERT INTO users';
    $query .= ' (first_name, last_name, password, email)';
    $query .= " VALUES ('{$first_name}', '{$last_name}', '{$hashed_password}', '$email')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}


/**
 * Get user by id
 * @param integer $id
 * @return Array or false
 */
function get_user_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return false;
    }
}

/**
 * Delete user by the user id
 *
 * @param integer $id
 * @return object - mysqli_result
 */
function delete_user_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM users WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Edit existing user
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @param string $id_value - user ID
 * @return object - mysqli_result
 */

function edit_user($first_name_value, $last_name_value, $email_value, $phone_value, $id_value)
{
    global $db_connection;
    $query = 'UPDATE users';
    $query .= " SET first_name = '{$first_name_value}', last_name = '{$last_name_value}', email = '{$email_value}', phone = '{$phone_value}'";
    $query .= " WHERE id = {$id_value}";
    $result = mysqli_query($db_connection, $query);
    return   $result;
}

function verify_password($password)
{
    global $db_connection;
    $query = "SELECT password FROM users WHERE id = {$_SESSION['user']['id']}";
    $result = mysqli_query($db_connection, $query);
    $password = mysqli_fetch_assoc($result);
    return password_verify($_POST['password'], $password['password']);
}

function get_user_by_email_and_password($email, $password)
{
    global $db_connection;
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db_connection, $query);

    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        $existing_hashed_password = $user['password'];
        $isPasswordCorrect = password_verify($password, $existing_hashed_password);
        if ($isPasswordCorrect) {
            return $user;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// function get_user_by_username($username, $phone, $password)
// {
//     global $db_connection;
//     $query = "SELECT id FROM users WHERE pass = '$password' AND username = '$username'";
//     $result = mysqli_query($db_connection, $query);

//     if ($result->num_rows > 0) {
//         $user = mysqli_fetch_assoc($result);
//         return $user; 

//     } 
//     else {
//         $query = "INSERT INTO users (username, phone, pass, isGuest) VALUES ('$username', '$phone', '$password', 0)";
//         $result2 = mysqli_query($db_connection, $query);

//         // var_dump($query);
//         // var_dump($result);
//         // die;

//         if ($result2) {
//             $recentId = $db_connection->insert_id;
//             $newUser = get_user_by_id($recentId);
//             // add_user_to_session($newUser);
//             return $newUser;
//         } 
//         else {
//             return false;
//         }
//     }
// }





//ADDED FOR LOGIN
function create_guest_user(){
    global $db_connection;
    $query = 'INSERT INTO users';
        $query .= ' (isGuest)';
        $query .= " VALUES ('1')";
        $result = mysqli_query($db_connection, $query);
        if ($result) {
           $recentId = $db_connection->insert_id;
           $newGuestUser = get_user_by_id($recentId);
           add_user_to_session($newGuestUser);
           return get_user_by_id($recentId);
        //    var_dump($recentId);
        //    die;
            // Create a user array in the SESSION variable and assign values to it
        }


    }

function add_user_to_session($user) {
    $_SESSION['user'] = [
        'id' => $user['id'],
    ];
}

/**
 * Delete user by the user id
 *
 * @param integer $id
 * @return object - mysqli_result
 */

function delete_cart_item_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM cart_item WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

?>