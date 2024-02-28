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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '|FrhT%Eh8D`B!rt`n`<5SWt19>5JgEu&Z5}NGv{F7lCa?)9+iJ4[Up6yU<9]sT}*' );
define( 'SECURE_AUTH_KEY',   'iiZ)uJMq|@C`:=lDy,OBDl8<W|mlj 7fG^muxy 7Q7hHuUgR]ux^74~R#_1:pAu)' );
define( 'LOGGED_IN_KEY',     '[$AR~f:pFot39xzl@2nJTHIfu7_X%G79`c%^ZTDK+cP(78&N]v*j$9/oG4E7BY0O' );
define( 'NONCE_KEY',         'uvIse[.aR$c+}fMg6fmS3.jy[U|9h3eA`!f{.clE~X3>#toy*toM8tp@M$7>?!!m' );
define( 'AUTH_SALT',         'j?-[Fsj-a<7;?+/FWB(:88$^*~*u kV1>{JYVJxWJ*o90mU^cr*s;8O(&;y13u>d' );
define( 'SECURE_AUTH_SALT',  'fvJivMOpG<OZ/H_dXFIdNPf@c`AyRyW`W_}#QACPgvQ5(G.q_cX}fX6jprh|0Snz' );
define( 'LOGGED_IN_SALT',    'P:6xl4{>&lmxpI(G;0dP<w#A!)H4i]PElZt/]J>hU(Y}ehs&h+H@+Y0CUOq4Jt#f' );
define( 'NONCE_SALT',        'f_JpNkC0Bm8S(T3rxhD_0SSwKI>VtIosiQk!f<e4omX;jgdm/e;J+~,S<# %8vkF' );
define( 'WP_CACHE_KEY_SALT', ';00a,Rx>gBzo*b88 &6{,O%)^j8WGoEkb  6yTHnv+=/N%;YU0u)RPKS|Jb?PU5P' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
