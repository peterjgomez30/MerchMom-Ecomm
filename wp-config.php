<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'l.{4K=81@croolbO~JFTYkvP6b:}Z>{;k3Xf_U|%ZW{Vx/nkRia/ 1FJryUa:%JA' );
define( 'SECURE_AUTH_KEY',  '4TGVHb[Xihhy>,Xf3H-Og)^fa(ZwM.N@%!ce.mM{!GX`]&:O7YqCP^EKvN7D:A*-' );
define( 'LOGGED_IN_KEY',    't#@C`pm&w#yLDO6r-kjpJuX7,pE1R6OBx!AP8{;W]+E|%ClA2X0G~W?}]WBMJ;W7' );
define( 'NONCE_KEY',        'Y>moIM@Gft)0)++nD;UdZCO6v` HwJQ|6@X-?w#-POO~0<kTmRG~^D|mO IDDIn*' );
define( 'AUTH_SALT',        'Ov,y(GZs$E&*CL8bYT<hz5Pu@<vU7zc`$<kY+|~JP_<i%0i@$9V0!}b3WsJ-!)O2' );
define( 'SECURE_AUTH_SALT', 'KoX?V;:g4yy@qIgr0x|B !%lIEwq.HI!8qpL([Le`8oQMW]jSe{ss$dh<#Qds7|.' );
define( 'LOGGED_IN_SALT',   'We:>.Uqe-KU9Z/CY{8RS1o%+UvtK#/?F[@f!E!(?#YFPVW?nK.0.ReCBo2|29jmi' );
define( 'NONCE_SALT',       'T&P u4iYP.}Un^Hr^1O[S8LzIGH5 Hl_=+ 0x2L@{A$o0baHFg7+8LMuLfC,DOta' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
