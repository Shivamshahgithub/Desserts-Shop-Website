<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<p>Welcome to the shopping website. You can shop chocolates and icecreams here. Happy shopping!!</p>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>