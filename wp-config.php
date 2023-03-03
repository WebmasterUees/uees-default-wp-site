<?php
/** Enable W3 Total Cache */
define('WP_CACHE', false); // Added by W3 Total Cache



/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Location of your WordPress configuration. */
require_once(ABSPATH . '../config.php');
$table_prefix  = 'wp_'; // solo números, letras y guión bajo al final.



if (!defined('WP_SITEURL')) {
	define('WP_SITEURL','http://' . $_SERVER['HTTP_HOST'] . '/workplace/core');
}
if (!defined('WP_HOME')) {
	define('WP_HOME','http://' . $_SERVER['HTTP_HOST'] . '/workplace');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/site');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/workplace/site'); 
} 
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define('FS_METHOD','direct');  

define('WPLANG', 'es_EC');

define('WP_DEBUG', false);