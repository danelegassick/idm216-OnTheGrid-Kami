<h1>Meals</h1>

<?php
if (!isset($meals)) {
    echo '$meals variable is not defined. Please check the code.';
}

    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($meal = mysqli_fetch_array($meals)) {
        echo "     
            <div>     
              <img src='{$site_url}{$meal['image']}' class='table-img'>
              <div class='recipe-block-text'>
                
                <h2>{$meal['item-name']}</h2>
                <h3>Price: $" . "{$meal['price']}</h3>
                <h4>ID: {$meal['id']}</h4>
                <p>{$meal['description']}</p>
                <p>{$meal['ingredients']}</p>
              </div>
            </div>
          <hr>";
    }
?>