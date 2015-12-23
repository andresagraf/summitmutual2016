<?php

/*

	Escribe aqui tu configuración local y luego guarda el archivo como 'local-config.php'

*/

// Global DB config
	define('DB_NAME', 'wp_summit2016');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost:3306');

	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');

	//Tipo de ambiente
	define('AMBIENTE', 'local');

	//local
	//desrrollo
	//produccion

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
if (!defined('AUTH_KEY')) {
	define('AUTH_KEY',         '$JDV>)tR6eau0pIOB,sX1[=oviad}$-CGc~ j/|j}fc<SKJ)GY^8LCF~ YUyhOSj');
	define('SECURE_AUTH_KEY',  'G!U hEY.na6K5 DT5GiGXiR,+&`6O;QSMS&A7ihg[crF{E5!%UoDr(#JfM,%y!%:');
	define('LOGGED_IN_KEY',    '+}|GX>Gb$AzFo_h@&h=aPNW>-Pr}/NhXXuKU5cR{7GY9uQ&0q@,X84U[NF!Q|^0;');
	define('NONCE_KEY',        'ac:kWRf>nOLE~_j?l>i.:Fg]0Q,Cfcw?eA(A$)5c7ce$`Ih`;8{X+ k z-)8BUPn');
	define('AUTH_SALT',        '{;3{M!%z8Q{?aSZGcsc6ASEmqE=-/i5@!je9r)p? 1>mj?$5U;B)%g]EZIxtR=5q');
	define('SECURE_AUTH_SALT', 'bZw@-ZZ|3^(2WZp4-AxO+eC}[3S+8f`lCN<b+,nq(p-d{?_8vqjd9/geB:8eB/2}');
	define('LOGGED_IN_SALT',   'rdUoJg|KP.``pX~`@|(|8Hf>a#:z;4ah+}%gM&=aa>Tf)nHoalN|:orDT3D]/]6`');
	define('NONCE_SALT',       'z7?0YbQu]K4EV%GxY@1EQ!+5jUp`EYA:+;SM_?1A#W;)PC:ETTP0&:%g/2Ny}3iO');
}
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cron_15_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . ':8080/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . ':8080/contenido');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':8080/contenido');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');