<?php
if (!isset($meals)) {
    echo '$meals variable is not defined. Please check the code.';
}

    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($meal = mysqli_fetch_array($meals)) {
        echo "
          <a href='{$site_url}/meal-details.php?id={$meal['id']}'>
                <div class='food-card'>
                    <img class='food-card-image' src=' {$site_url}/dist/images/meals/{$meal['image']}' alt='photo-of-meal'>
                    <div class='food-card-right'>
                        <div class='food-card-title'>
                            <h4>{$meal['item_name']}</h4>
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
            </a>";
    }
?>