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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'council');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b,t@4vk!v*^XCKkyQgaX2+rJ1rgpGeo<(j:O}402-,3_}x/J+wC/wj?Fe]Fvc.4~');
define('SECURE_AUTH_KEY',  '[B=*fN|m,u&xkuWT(3V6q|bC1g)<h=$pv2P^f9RR&a25vCBL.n4ZY_uygC| U3J)');
define('LOGGED_IN_KEY',    'j[I:~H[{o0aqZqtsEf)N[>55ZJru4ZEdP,a6V)sgngJ)>xtP@Md_L[R)<gJ>{ Py');
define('NONCE_KEY',        '{Fs3Hsr5A7W$<0vG9eu(mjRVZptX%%d38;-$1)<rqvb4,JGQ9R,s[Wmz8RyWs|3:');
define('AUTH_SALT',        '*,cY#<h<bEoKwXvaZe>?om,i%hH*c.in!79vs+;6d`PYBTcDJc5Dc?0/z<)~~62V');
define('SECURE_AUTH_SALT', '1,JAnDgrhM(EK:Q2q~j@2h<BmOQNT!-@4L=@cgKJ_`yshZ1`4W. .q[QP[w+0zUg');
define('LOGGED_IN_SALT',   'Po(hTOQhKNPWK_hOMK]EOiKUb1l]3]JaR.tt1sa$lXpAwg/@k!v^Ex!&O*:Jv7ZW');
define('NONCE_SALT',       '`2M0.3!|6{esRCd/:Z<{+QUlQbsRiPIup|Uc/#ox7?*oAlSb(3N~%3InQ9}Ex?I?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
