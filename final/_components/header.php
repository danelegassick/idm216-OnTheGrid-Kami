<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}

$site_title = 'IDM 216';
$document_title = $page_title . ' | ' . $site_title; // Home | IDM232


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <title><?php echo $document_title ; ?></title>
</head>

<body>

<?php 
if (isset($_SESSION['user'])) {
    // echo 'Cool Menu Here' . $_SESSION['user']['first_name'];
    include __DIR__ . '/main-nav-login.php';
  }
  else {
    include __DIR__ . '/main-nav.php'; 
  }
?>

<main>

  <!-- Main Content Begins -->
