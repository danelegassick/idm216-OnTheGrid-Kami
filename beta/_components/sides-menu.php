<?php
if (!isset($sides)) {
    echo '$sides variable is not defined. Please check the code.';
}

    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($side = mysqli_fetch_array($sides)) {
        echo "
          <a href='{$site_url}/side-details.php?id={$side['id']}'>
                <div class='food-card'>
                    <img class='food-card-image' src='{$site_url}/dist/images/sides/{$side['image']}' alt='photo-of-side'>
                    <div class='food-card-right'>
                        <div class='food-card-title'>
                            <h4>{$side['item-name']}</h4>
                            <h4>$ {$side['price']}</h4>
                        </div>
                        <div class='food-card-desc'>
                            <p>
                            {$side['description']}
                            </p>
                        </div>
                        <img class='quick-add-btn' src='" . site_url() . "/dist/images/QuickAdd.png' alt='quick add button'>
                    </div>
                </div>
            </a>";
    }
?>