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
define( 'DB_NAME', 'u291970360_RPr94' );

/** Database username */
define( 'DB_USER', 'u291970360_U9UYY' );

/** Database password */
define( 'DB_PASSWORD', '4MngfUJ0fo' );

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
define( 'AUTH_KEY',          'NZQ!ufVm!Lv5t{`)T6S=z-TPQ-RISy_tz`iWe:=?qt+?-(u.@lsV?j_V;RW6E6__' );
define( 'SECURE_AUTH_KEY',   '[X%/0P9kpg^s)Z+;IVpKX<C.-ILb[l5Bcp4QlaAS_b<g7e .%0!m.ghSa0B&MyJE' );
define( 'LOGGED_IN_KEY',     'EH%[|B%vK*r4bdw^~OR@@/^VB_hLzUddT(P~l2TVm7Sdl$k^w(WJ^|0 [i^bRa@5' );
define( 'NONCE_KEY',         ',ucqE07Ij/ScWceqr*qD~C8;()m,:n4?u55QJDJ6V^hWeI&pauThAcVaa6$A2??a' );
define( 'AUTH_SALT',         ':9SO@EbjbP/tp`;g9#&GU`bI._~g=SdH4M?Y-dw(o>0`^73-[dk^TZd8=)<k5yrI' );
define( 'SECURE_AUTH_SALT',  'C[nJpb~Ut35#yJ-O?k=z;}<HZ,k&w/f_jzWtV.r3+*GePX,52.aZ#MTm}yj[ma42' );
define( 'LOGGED_IN_SALT',    '~~#QkZ=wKFQRB*?Q:<c&${%yi|PIJo_F}?mv[|j:!loL-u3$BNRnut.C1p+ Mw2o' );
define( 'NONCE_SALT',        '??`nkI-lqp[e_3m1:ZM_{[7GEKj0G+JBwl<P#G;j) @p-{]Le%;D.QZOQ_e;Z!6O' );
define( 'WP_CACHE_KEY_SALT', 'CNdv&4u|@Nolg+p{Vhj.)Oz`Mo&9223W(JNRtw0<=w3o;S@^TV-e:o.mM}ii+&;a' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
