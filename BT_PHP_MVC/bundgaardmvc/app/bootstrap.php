<?php 
// The bootstrap file is where we require all our files, 
// instead of requiring them in the index file.

// Load config file
require_once 'config/config.php';

// Autoload core libraries so we dont have to manually require every file we need
spl_autoload_register(function($className) {
    require_once 'libraries/' . $className . '.php';
});

?>
