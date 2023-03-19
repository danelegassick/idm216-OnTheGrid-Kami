<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>

<?php
//created array of items to target in modal
$site_url = site_url();
while ($meal = mysqli_fetch_array($result)) {
    // if($meal['category'] === "meal"){
    echo " 

          <a href='{$site_url}/meal-details.php?id={$meal['id']}'>
                <div class='food-card'>
                    <img class='food-card-image' src='{$meal['imageUrl']}' alt='photo-of-meal'>
                    <div class='food-card-right'>
                        <div class='food-card-title'>
                            <h4>{$meal['name']}</h4>
                            <h4>$ {$meal['price']}</h4>
                        </div>
                        <div class='food-card-desc'>
                            <p>
                            {$meal['description']}
                            </p>
                        </div>
                        <img class='quick-add-btn' src='" . site_url() . "/dist/images/QuickAdd.png' alt='quick add button'>
                    </div>
                </div>
            </a>
    ";
}
?>