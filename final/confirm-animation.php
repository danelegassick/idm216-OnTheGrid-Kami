<?php
include_once __DIR__ . '/app.php';

// function RedirectToURL($url, $waitmsg = 0)
// {
//     header("Refresh:$waitmsg; URL= $url");
//     exit;
// }
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dist/styles/confirming-loading.css" />
    <title>Confirmation Loading</title>
</head>

<body>

        <div class="confirming-animation">

                <img class="noodle-pull" src="dist/images/noodle-pull.svg">
                <img class="ramen-bowl" src="dist/images/ramen-bowl.svg">
        
            <h2 class="confirming">
                <span class="confirming-text">Confirming</span>

                <div class="ellipses">
                    <span class="dot1">.</span>
                    <span class="dot2">.</span>
                    <span class="dot3">.</span>
                </div>
                
            </h2>

        </div>


</body>

<script>

setTimeout(function(){
    console.log("function ran");
    window.location = "<?php echo site_url(); ?>/order-confirmation.php"
}, 4500);

</script>

<!-- <?php 
// sleep(2);
RedirectToURL(site_url() . "/order-confirmation.php", 4.5);
?> -->
</html>