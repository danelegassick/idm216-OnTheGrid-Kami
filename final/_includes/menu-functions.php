<?php

// get all recipes from the database

function get_meals()
{
    global $db_connection;
    $query = 'SELECT * FROM meals ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_sides()
{
    global $db_connection;
    $query = 'SELECT * FROM sides ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_drinks()
{
    global $db_connection;
    $query = 'SELECT * FROM drinks ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_restrictions()
{
    global $db_connection;
    $query = 'SELECT * FROM restrictions ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_proteins()
{
    global $db_connection;
    $query = 'SELECT * FROM protein ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_spices()
{
    global $db_connection;
    $query = 'SELECT * FROM spice ORDER BY id';
    $result = mysqli_query($db_connection, $query);
    return $result;
}
?>