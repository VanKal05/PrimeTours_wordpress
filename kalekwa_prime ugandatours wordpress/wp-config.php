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
define( 'DB_NAME', 'Prime_Uganda-tours' );

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
define( 'AUTH_KEY',         'f36;!NfOSo4_uv&>(+z5kpx-^r2@r~xN/blVmHz6E|>ngSG`9:P@]ZklD@Vq({E9' );
define( 'SECURE_AUTH_KEY',  'qNpDtn~||`9o46[]5JUK83q@*GYR#mULE0ve9i1ahGK%z1CHA,!F`an9Svi(8ze+' );
define( 'LOGGED_IN_KEY',    'mgma9Ae|9kVJr>|R(-Ty4am#5}+euf!.2=Q<VaU7ma`Ds4w^vxA7m$9y)U]iqm4E' );
define( 'NONCE_KEY',        '}-%2pzC-T UR+ZZj@K|9d%yTVaYDcIr%H3k$w1i]xc~D`.GB]Dg=g1TEUpJ#i](u' );
define( 'AUTH_SALT',        'h-h8,:&!R&%sT^,eHD4[<KA%<x?2R|dfH!gui~q2zqSn_>CsA0pNEO`urI9bX9ul' );
define( 'SECURE_AUTH_SALT', '|*27kLLzVT~<{0X4m|O,uvk~?Jg,M)2Y3j~jZb]x=t8R${y.J:t-#-s7`V eS c<' );
define( 'LOGGED_IN_SALT',   '|(^A>/f>c(jUlf[e?|&l }<hW$@~BJ]~FE*18z2C}Mn]hB@Nroov)wT>FtF2 xav' );
define( 'NONCE_SALT',       '26;8BVIDr 19@-Y9!hym9w%@}q~FqeY]%Ie!oqn71b9rmQM27@K([SSV^6efN7%f' );

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
