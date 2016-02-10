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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ' UnXm*7J/Xgx$V+jD]gxL@:8)p#Qvu!n;n1:E2=WWVX^k-*g(LuzfeKt!8f]$*4K');
define('SECURE_AUTH_KEY',  'Sv0|,}2p1I)k+Av@3ms%8{4_S}`f{mEvG%pcX:xEK3DsM?gCMkCg_U4Jd_p/ED5N');
define('LOGGED_IN_KEY',    '(-LZl(b!@sA`tQUJX6W|@OIM>OMQqhrZA-Gf@aJWc@)]6Zva__aeVV&pr,_s Y|)');
define('NONCE_KEY',        '?Cv61]1vE|/}A}.P/Wh<Pw1R.tpCbo#.&GOtK d6M4=T}>=UgZ96VGVv;d897bh4');
define('AUTH_SALT',        ':|e~{>lF+u~$V3@!Nx8V-9{-V18(}D)0`:}[7ynG4A-<6Tn4wr6PTj9K_!*rp?/L');
define('SECURE_AUTH_SALT', 'H},ZjZETsH%q+Wx<9^|R-2oAMz]6|_z@$|D9JNO}&8-fGti)1:,7{+_y^+~-%]W:');
define('LOGGED_IN_SALT',   ';noDIzY3xMJl$ urp+Llf!_`8bg|A^Ud!AGz`PO{Iz=9~M4MG7I9]5|8C@tUr|`g');
define('NONCE_SALT',       'aD?QA-*| }M^xVr6-eb?($z-Qnyx%5<6tzg.heoqKk3f-GYNr-N4;^LE~5iRPG?@');

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
