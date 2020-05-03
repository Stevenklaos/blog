<?php
// name
define('PROJECT_NAME', 'blog');
// root for url
define('URLROOT', 'http://'.$_SERVER['HTTP_HOST'].'/'.PROJECT_NAME);
// approots
define('APPROOT', dirname(dirname(__FILE__)));

// params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'blog');

define('PASSWORD_LEN', 5);