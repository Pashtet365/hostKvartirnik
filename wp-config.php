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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kvartirnik2' );

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
define( 'AUTH_KEY',         'C#?pYJO?Yx:)wX-pQj*2Nh2y 7&xiQVIIukX-@:fne^c9|/]Kze!L:@DbbW`F~qG' );
define( 'SECURE_AUTH_KEY',  '_}9EsK5Az4NeOlzUZvWQof^`$S +eWu~j[/smf~0vO:`D_V8<jjB]}8a{jTIea`5' );
define( 'LOGGED_IN_KEY',    'O`u2wVef^I85%`2e@1H$^cRk=X%nb&dRN==)PX4q[q+Z,hx.tq8~TRt=Qw: e(yn' );
define( 'NONCE_KEY',        '8[pc.p{@jz=%7`a5VbMn[#HYf-`V=/}uQu^Yg9=z-R&VQZv0(HYFvs7lj#V}n$sG' );
define( 'AUTH_SALT',        '2U0Y>Nvx2)}bw|cpwBw|kde]jDmTfQ<x+m;gUrkhdui9cj%<I4-Y4nY1&]oL{!)?' );
define( 'SECURE_AUTH_SALT', 'X<8:.P&`L(?!<mbBC(L)OqoX!!8dx4]3Exkq`6,g-%ZV?o7KFo^h*#Ip*KPlltx<' );
define( 'LOGGED_IN_SALT',   'HnqCn1w/@*J>LAg$1Eu}$OI} J3QiID>umTg5_6g!Cc4o>(e^9NwMM#b*H9?NQz5' );
define( 'NONCE_SALT',       'yq0ES`Ql&?dSs/FAm$RLp-T :i9GMcBp~J$(b,gd|wH4@0X9OIuCK-6w:!]Pd_B~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kv2_';

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
