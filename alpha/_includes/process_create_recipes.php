<?php 

include_once __DIR__ . '/../app.php';
$page_title = 'Process Recipes';
include_once __DIR__ . '/../_components/header.php';

//Get values from $_POST and insert into database

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$title = sanitize_value($_POST['title']);
$img_path= sanitize_value($_POST['img_path']);
$overview= sanitize_value($_POST['overview']);
$ingredients = sanitize_value($_POST['ingredients']);
$instructions = sanitize_value($_POST['instructions']);

$query = "INSERT INTO recipes (title, img_path, overview, ingredients, instructions)"; 
$query .= " VALUES ('$title', '$img_path', '$overview', '$ingredients', '$instructions')";
$query_results = mysqli_query($db_connection, $query);

if ($query_results) {
    //Success
    echo 'IT WORKS';
    redirect_to('/admin/recipes');
} else {
    //Fail
    echo 'EPIC FAIL';
    redirect_to('/admin/recipes?error' . $error_message);
}

?>






<?php include_once __DIR__ . '/../_components/footer.php';?>