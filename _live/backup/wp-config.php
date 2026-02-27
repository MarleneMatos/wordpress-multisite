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
define( 'DB_USER', 'oneadminwtf' );

/** Database password */
define( 'DB_PASSWORD', 'Try4g41n£$' );

/** Database hostname */
define( 'DB_HOST', 'marlenematoscom.ipagemysql.com' );

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
define( 'AUTH_KEY',         '{Ir/_Ku7mabdDBzi0m4_%:;yY?x_Pe6i4X=JR~_5S?n 8OVuuH#U$+qngNXVy}U[' );
define( 'SECURE_AUTH_KEY',  'kA$W|FH6*OE@^Q<5%|:=8PCi~`|3u5>OLvb7RANre/|eJbSD)zxXJ3G=Cn+<dKwk' );
define( 'LOGGED_IN_KEY',    '8dw%pv@~J^)_V2kHs#x,j@4VmE}8c-=@T<M,uW`-yB4oSf-oX~zCplQMod&_AhEJ' );
define( 'NONCE_KEY',        '4].HPTdTB+VGlyI;eCZtV8X93eF`_X+#]mGlC@cR{@,Q%F-:~8V4aI=v`15Jkh9D' );
define( 'AUTH_SALT',        'lA`qSvb,CP hiKwS^-%i>P<Md%DYCNciIt`=3mUn,9R {bF*]i%dv?}Dqwb}s;uf' );
define( 'SECURE_AUTH_SALT', '9|32v!yw5n5@s[< ^[>h]?@*/9@O DB8A_s+DBqQm9qN`w#G[IEl/6q/@+BH_FR%' );
define( 'LOGGED_IN_SALT',   'U=j{.J(K?i,~h1~M(_fk6{eG&6R!nIuX<dg;7NQt7L|:7/(NbK(i-[2Jh2kd!Un{' );
define( 'NONCE_SALT',       '{AZdm@&9**4tDuxM@o+h;!kRl] >>@3P!8)8]=exQ3|o)Y<bl$~byH[.%o__Bw?e' );

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


define('WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'marlenematos.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

define('FORCE_SSL_ADMIN', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
