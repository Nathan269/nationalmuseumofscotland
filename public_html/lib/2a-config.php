<?php
/* [DATABASE SETTINGS] */
// ! CHANGE THESE TO YOUR OWN !
define('DB_HOST', 'localhost');
define('DB_NAME', 'id9667645_dbphpesearch');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'id9667645_root');
define('DB_PASSWORD', 'AARON511');

/* [MUTE NOTIFICATIONS] */
error_reporting(E_ALL & ~E_NOTICE);

/* [PATH] */
// Manually define the absolute path if you get path problems
define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);

/* [START SESSION] */
session_start();
if (!is_array($_SESSION['cart'])) { $_SESSION['cart'] = []; }
?>