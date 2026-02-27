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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_multi_20260224' );

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
define( 'AUTH_KEY',         '+T-H>_)iGUW=X:EaYRu&EOs^gHdto/AHRol).OE9:>0jbT|*YDEGeeg0eM6tb>[A' );
define( 'SECURE_AUTH_KEY',  'VqyypWvI;Y:2%[B/X^-]FlQW[LO.A~}1G)-s/0,O%[.S3Y$oKs.F,~J lvWN&_x1' );
define( 'LOGGED_IN_KEY',    ',/hu #I}u;5w?n|JnnKDQri3Jy9XP1#,0b|o:ruE#r45IP>bND)Gs`.,xeh5rL: ' );
define( 'NONCE_KEY',        '#2S<GLdF;}wrjvAFw+(4XXXK_QNHXo#/l/ID}Pp@^dQdE3!M.Ak?4o/~=ff`r*f&' );
define( 'AUTH_SALT',        'AvO)<Sv6(7o~b70`pI@vU,~.t]LnFt!,{9}O~~~zHKxZwzStp@0alA])2mM+Ua7v' );
define( 'SECURE_AUTH_SALT', '3I,i@167<RI8I1YCg`ddf[Hd=f_yj:x`zuezD(.};p=+LuQg1]T9_p4wc]YUB>o@' );
define( 'LOGGED_IN_SALT',   '-eL/b<C({Ar1x~GVKzbeK3ajOhm/l*W%@lNpado+[hey/#;q@kN}0%`FN-GB{PtP' );
define( 'NONCE_SALT',       '+&*7i,}pfBIi-&ojrD2O+hVVWIKp|0]L4K|@SHo_q^Co6hv2krMFZrvv&u|+LTH4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wtf_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */

/* FOR LIVE */
//define( 'WP_DEBUG', false );

/* ONLY IN DEV */
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'marlenematos.wtf' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
