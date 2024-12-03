<?php
define( 'WP_CACHE', true );


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u987495539_VFG4L' );

/** Database username */
define( 'DB_USER', 'u987495539_DzySc' );

/** Database password */
define( 'DB_PASSWORD', 'z4vugsfx4W' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cc#IT<c|cSOEv{1-SvQ4xUOz9%>@h& ;$l6.9yLw/p6,AE^rBsE#yDY=c}3J9;O3' );
define( 'SECURE_AUTH_KEY',   'w#`trUuI;+U_7kpo`aMeMmA4bhQ*M1Gk)6IXf~uBBvt!2DLWP4hRU/JcJJFJ~`tD' );
define( 'LOGGED_IN_KEY',     'r0Mtek{L.3_,`59F @~j6] wg8D#409xBavN0Nm%9?k4=$,M].l</fOB+>+Yd;d7' );
define( 'NONCE_KEY',         '(13;~>D<C%F[Y%i0}3C@sgg@bz@E-MJ2W@RzLG&=q}O+}9m-qk}xsioKAiuREyU%' );
define( 'AUTH_SALT',         'r@];^s3@961}K8ng}ol;),4vKP9rG0o`gK?$@.sT]9$5UAKeqm*{H&&e26&o]k)z' );
define( 'SECURE_AUTH_SALT',  'tg$xQ#pVqX/omCk{x>Iwy!yr}XN.1B%+P|vhUI!#~6Dzbv,Tb,TIjAp0,JY@aj|&' );
define( 'LOGGED_IN_SALT',    'WB6+j]EsZd*W=1N[$h?rLW869U?*1w%4>{-]ph7NNkMkW+xPFL;]%::k?F6}`;fm' );
define( 'NONCE_SALT',        'QS+`,FSH=Jt)4!>}fQdJ(hT)Ao?1vm4Ez|X[]&v`;,*LYAY+} J|5A?:<P^X@?b/' );
define( 'WP_CACHE_KEY_SALT', 'bn#/XR[o 9~BllEqmX# 0[gZ$ @gDfNR&-R4JYHfA<;F2m8aE8*wu^wvLwfdry}6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '10139b23a56c7bfa382005373d784a65' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
