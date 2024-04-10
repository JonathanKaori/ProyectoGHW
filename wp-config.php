<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyectoghw' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YO5}CrMW8)e+6NSxYhSTS;PJqJhar^x8B(^CNy2rp@9IatHn+E?c^4Ws}-hQ2Hk0' );
define( 'SECURE_AUTH_KEY',  'gd>+;zIgCjIc7Pu*NwJkET|5~>6<a$AgA>-y=6!-,sPgU,[ZE-+Ckxo{48OavVCC' );
define( 'LOGGED_IN_KEY',    '$x16_4t6C;sb&?`p091o~86I(T(Cc_7]y*X#iy{4FdpY1s}iqaAzAl Hy9Wd/6ko' );
define( 'NONCE_KEY',        'm4jLcpmZ$E_7QXe>U9?jo&VI<,di]GOyQO%h9,ZB<FM#T@A7MDsq1FpDFCF5KLn0' );
define( 'AUTH_SALT',        '{]uIVSYO2:`6BiSCg[)qbiA^ag#ea>pr1wx(h|j44!VeU1E9QejCpzdf@| S<bkD' );
define( 'SECURE_AUTH_SALT', 'qcTf|PiY-;SwNfN~D#$gAE<!t6=dfcU/a3djTw0}c^3Au!U-z><,/c3&tNqPb%2K' );
define( 'LOGGED_IN_SALT',   '43jDubsHHHVUPu!aW.bo82iO} X#MGC;oK20ErxzxWE1mmJU#_Hhy$~lSQ2M@uh9' );
define( 'NONCE_SALT',       'Qo;xDN}:(6I{oM^~zm|saPxAEAP[JRd><!RZ7&{lRxL&~VUcx~f.1N|++hJE:a}0' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
