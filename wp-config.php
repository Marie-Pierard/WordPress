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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'forWordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Marie' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k`/)x6sU]W/dlPEvb3)vU;< u&PSD_[nkN]^l&mD@K@S=(m|h]}Fz-om+l~R-2,2' );
define( 'SECURE_AUTH_KEY',  'J%:qSJb;Rdh`qSJlJ&X_*0O{T.)&+gpK;Bbbl;S;*@XBX{0y.  TTX(d#)gNA1v;' );
define( 'LOGGED_IN_KEY',    '*~FhDP}H%T`&G#(2t0ihZ#{M/H!7D9JwsZzs<QPVvC+h7HBVhUdWZ0!_5`se6dvn' );
define( 'NONCE_KEY',        '(W6F2mF bQ:s6B}}>BK9y29XPw8(xFNjr*3x4FB*Jp2]4-=Zl.Rlof%Rg%bBWL91' );
define( 'AUTH_SALT',        'Nw6TZOa3:2):7tt`|Lh4W[*hVj&Yel{0/0c}D*<6C)[2D@h>aT`(<ZlakCMx5jZg' );
define( 'SECURE_AUTH_SALT', 'j^]M`&mzb0CV$fo*gF>0OiPnZ4l@oJNQWz~1`M8&NG)+G1M u5h[;Hw#2bRiUbUI' );
define( 'LOGGED_IN_SALT',   ';Rb/dCj4`]aG g0s_P}o}4{6XwMt2()XfHR!fp.6TdMgme?Pl`21cM)aB,5oR(gf' );
define( 'NONCE_SALT',       '-W[&Pud?r7e5]58sY8#2q<8+#@PW&GMi)HT4=80Dh+0WO=7B+=O;_XH=x@JJ[O5:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
