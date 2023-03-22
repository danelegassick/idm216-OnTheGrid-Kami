
<?php
include __DIR__ . '/../app.php';
// Destroy any current session
session_destroy();

$_SESSION = [];
// redirect to homepage
redirect_to('/');
