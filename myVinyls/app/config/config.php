<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'jakob');
  define('DB_PASS', 'password');
  define('DB_NAME', 'album_db');

  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/myVinyls');
  
  define('UPLOADPATH', 'C:\\xampp\\htdocs\\myVinyls\\');

  // Current url
  $a = explode('?', $_SERVER['REQUEST_URI']);
  define('CURRENTURL', $a[0]);

  
  // Site Name
  define('SITENAME', 'myVinyls');
  // App Version
  define('APPVERSION', '1.0.0');