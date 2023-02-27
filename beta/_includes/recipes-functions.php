<?php

// get all recipes from the database

function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes ORDER BY title';
    $result = mysqli_query($db_connection, $query);
    return $result;
}


/**
 * Insert a user into the database
 * @param string $title
 * @param string $overview
 * @param string $ingredients
 * @param string $instructions
 * @return object - mysqli result
 */

function add_recipe ($title, $overview, $ingredients, $instructions)
{
    global $db_connection;
    $query = "INSERT INTO recipes (title, overview, ingredients, instructions)";
    $query .= " VALUES ('$title', '$overview', '$ingredients', '$instructions')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

?>