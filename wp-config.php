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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Brief7rand' );
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
define( 'AUTH_KEY',         'J;,hOKK WD2/Kei*z+.{2ZH,C$VLn+>R6nR!~XPs9Pe2S5#V?wYu1`K~Gb&t.6@_' );
define( 'SECURE_AUTH_KEY',  '>3ZIZ7:DcXVih1T.18FX_/rA&A{2wi,$}AJA7A$(cZpWk<{Og6#5,&,rs?!X 98t' );
define( 'LOGGED_IN_KEY',    '>8Odh5;fx8$r^5h/g4Y&bu}uBYp9jBf!&xif:v S,RPE)LZ}&00PX,5dP_LD5,z6' );
define( 'NONCE_KEY',        ',1^ >S@T+VoL}(E+;bC0TKMA9,DA$Cj;L idu$e9:+s_P|;{gJ6_8J!6?@lO9mvL' );
define( 'AUTH_SALT',        '#:}bqh!N$!Ts>4ah7;>>hpwNdRr*rSN>hw> |1$W|]H}/ykbZGGB;+(7Q)/TqOew' );
define( 'SECURE_AUTH_SALT', '~R-Q{0J2VU+,SFizq@4rhKS@9uqKfiWMpYB[>kvygDZs-T:qiv)m}j^I{W#/`nX2' );
define( 'LOGGED_IN_SALT',   'IY5{OZEtTUU+_X39:bt0GcSr!*;x_S)a=<:X[pY0|{nCo~[oY4U}D+f*.PknYuYb' );
define( 'NONCE_SALT',       'F kuqL.9u$>P~ueSQ1rXsi}14+6QJc`-t_Fz:&MWhh#D z-Te1x:_Lh@*[cLZqEP' );
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