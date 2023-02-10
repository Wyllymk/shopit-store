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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_&AKYxDG7S9m3]u,d9Rgl#.;MG(S-@&f~B6;]f|cfpGNkUrVrR2.(MR%s r92J%-' );
define( 'SECURE_AUTH_KEY',  'F;mlH;4V|m;zPhDC)vT;~S4by>y-R.:U|iu]=[{3o1s5$lub,#f U^!9i-<xr@9C' );
define( 'LOGGED_IN_KEY',    'g00?_M!+u_Vvc`z-~kc,CS>#a%X$OsYKY/?YAfFR4d-{<g(l3k2|+gy`PJ.:M|OH' );
define( 'NONCE_KEY',        'i:^hxy^Bt]A4 l2<8rU?~#D{dq#n&.dd=B~E(HqrFYK^8bu!>GwWw~Iuf<?W|kgV' );
define( 'AUTH_SALT',        '{!?45W*_jsKGU0s{9falq!Yz:73>m[!/1$PYb0U[>Nj7/nrzFNt?-}Oqnl~.>_c`' );
define( 'SECURE_AUTH_SALT', '19h&<AWV#bI0J-7B_v/%tJP@Y~mp uy_13Uonhmc[U>CDp3G!{VwHrpGs_$px9,o' );
define( 'LOGGED_IN_SALT',   '.(zm]3LgO;f}oTQ%qP<;&mH~~#CDU@K(]t$C|.7pd@AwO+7>RMD<a8Wh)9V&T!1F' );
define( 'NONCE_SALT',       'DAXk*C,^m3&c{xu5nhPiEx4DUK&2j48ml]6}$2N_c<?5x|+*-4!Iz3#rD=.x~#dj' );

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

define('WP_MEMORY_LIMIT', '128M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
