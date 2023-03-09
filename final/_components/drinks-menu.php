<?php
if (!isset($drinks)) {
    echo '$drinks variable is not defined. Please check the code.';
}

    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($drink = mysqli_fetch_array($drinks)) {
        echo "
          <a href='{$site_url}/drink_details.php?id={$drink['id']}'>
                <div class='food-card'>
                    <img class='food-card-image' src='{$site_url}/dist/images/drinks/{$drink['image']}' alt='photo-of-drink'>
                    <div class='food-card-right'>
                        <div class='food-card-title'>
                            <h4>{$drink['item_name']}</h4>
                            <h4>$ {$drink['price']}</h4>
                        </div>
                        <div class='food-card-desc'>
                            <p>
                            {$drink['description']}
                            </p>
                        </div>
                        <img class='quick-add-btn' src='" . site_url() . "/dist/images/QuickAdd.png' alt='quick add button'>
                    </div>
                </div>
            </a>";
    }
?>