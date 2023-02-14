<?php
include_once __DIR__ . '/app.php';
$page_title = 'Alpha Home';
include_once __DIR__ . '/_components/header.php';
$meals = get_meals();
$sides = get_sides();
$drinks = get_drinks();
?>

<h1>Alpha Build</h1>

<div class="grid-3-col">
<?php 

include __DIR__ . '/_components/meals-table.php';
include __DIR__ . '/_components/sides-table.php';
include __DIR__ . '/_components/drinks-table.php';


?>
</div>

<?php include_once __DIR__ . '/_components/footer.php';?>