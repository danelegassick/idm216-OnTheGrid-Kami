<?php
include_once __DIR__ . '/app.php';
$page_title = 'Alpha Home';
include_once __DIR__ . '/_components/header.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
?>

<h1>Alpha Build</h1>

<?php 

include __DIR__ . '/_components/meals-table.php';
include __DIR__ . '/_components/sides-table.php';
include __DIR__ . '/_components/drinks-table.php';


?>

<?php include_once __DIR__ . '/_components/footer.php';?>