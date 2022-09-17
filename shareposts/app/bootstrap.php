<?php 
// The bootstrap file is where we require all our files, 
// instead of requiring them in the index file.

// Load config file
require_once 'config/config.php';

// Load helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

// Autoload core libraries so we dont have to manually require every file we need
spl_autoload_register(function($className) {
    require_once 'libraries/' . $className . '.php';
});

?>
