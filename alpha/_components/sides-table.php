<div>
<h1>Sides</h1>
<hr class="red-line">

<?php
if (!isset($sides)) {
    echo '$sides variable is not defined. Please check the code.';
}

    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($side = mysqli_fetch_array($sides)) {
        echo "
            <div>          
              <img src='{$site_url}{$side['image']}' class='table-img'>
              <div class='recipe-block-text'>
                
                <h2>{$side['item-name']}</h2>
                <h3>Price: $" . "{$side['price']}</h3>
                <h4>ID: {$side['id']}</h4>
                <p>{$side['description']}</p>
                <p>{$side['ingredients']}</p>
              </div>
              <hr>
            </div>";
    }
?>
</div>