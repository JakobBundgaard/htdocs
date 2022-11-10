<?php
// Load Config
require_once 'config/config.php';
// Load Helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

// Autoload Core Libraries instead of manually include them where needed
spl_autoload_register(function ($className) {
  require_once 'libraries/' . $className . '.php';
});
