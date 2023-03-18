<div>
<h1>Drinks</h1>
<hr class="red-line">

<?php
if (!isset($drinks)) {
    echo '$meals variable is not defined. Please check the code.';
}

    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($drink = mysqli_fetch_array($drinks)) {
        echo "   
            <div>       
              <div class='recipe-block-text'>
                
                <h2>{$drink['item-name']}</h2>
                <h3>Price: $" . "{$drink['price']}</h3>
                <h4>ID: {$drink['id']}</h4>
                <p>{$drink['description']}</p>
                <p>{$drink['ingredients']}</p>
              </div>
            <hr>
          </div>";
    }
?>
</div>