<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cmaraj1_yanalla_farms');

/** MySQL database username */
define('DB_USER', 'cmaraj1');

/** MySQL database password */
define('DB_PASSWORD', 'E2wIEugReU5GE7V');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ntu4fNAQ0pk2Pk2ALwWy0IHHU1zzfbjEcafAoLcVupnVpuwqfN9cokKwi85DoBSj');
define('SECURE_AUTH_KEY', 'Ym9A2HX1OwSYO1KDVDiT9mnZ95kOq45GhmNIoOlXjLoevqSTw1QU6WGif6zoq0BC');
define('LOGGED_IN_KEY', 'IDuP8RQV4P2rKXeRhgEpvGJ2BEYdPAwQ0IoDHXphFOykZPyouUb80dxRU38stiIm');
define('NONCE_KEY', 'iJR92n3Lj6GnSXGKxub3uLzSnrrQMrX8S6CaFLpLHftgGQdvGMprnGkpDRs1v4hO');
define('AUTH_SALT', 'fSbujiq4YSVEqXEzdTOQMXwk1SVorxUEvdXoIm9yvtyJklkKuIMx5weKX521GAvn');
define('SECURE_AUTH_SALT', '5uFzb7xoSujb4EYshjTTvNOsBm9aV60sUzzy9AhgA7mMek58ZJx5UTCrKTGJmkK4');
define('LOGGED_IN_SALT', 'KJJtxCP5XngpFrMAeEfRL5tkUTOowR9F7HlhdnjzNZ4T1rE89qTBdQcZBgZGEVKa');
define('NONCE_SALT', 'ho3q5PNuctI0bFSKi5msogBQZOoHeBPJTFaTruaOh7noPPyO6FpJP7BuvriLVfcd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
