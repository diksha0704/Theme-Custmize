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
define( 'DB_NAME', 'sentient' );

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
define( 'AUTH_KEY',         'XnJBtdmym+PnIbs#)A}1^y6 t$z/{N}pp7lenB[gzLZJ(;NYerkWI?o&0KI&(by$' );
define( 'SECURE_AUTH_KEY',  'jyfcmO]o{WysUS|?y*^N]D}zH`<dpZ>JZhKj9f,IT&l]T;6[LbPb*2JSQ4/=)3$2' );
define( 'LOGGED_IN_KEY',    'BeO!rbpa$-]{t[z9_ts9@^6:=GT_(cz-[r{gug$#!86,l@6X*P]JiC ?HmC_?Jde' );
define( 'NONCE_KEY',        'V::Go2_o;^G4?;b/}E#xQ$T$kQ&iL/%q<B^K(uyiB~1hIj*(411h3wLn(Nn]=YY{' );
define( 'AUTH_SALT',        '+;&j&*%7L/hR.V;5zE,b?uZ^B!cF?]0h1{F/%gB.!RMdpPG}Ix<<OW24~qJ=W+62' );
define( 'SECURE_AUTH_SALT', 'vzFdqkQcH^lb49(Pt<JB+yxig6#y1O_Z2r^cBuua wh<$NMweTUz9DP{2fu0|zM`' );
define( 'LOGGED_IN_SALT',   'R7b0MW)voy[kJ`Q,RPe8[K]=-1t4 E%)#ndULb00iXj2~^jN8Fnk>75qGl^p!B@#' );
define( 'NONCE_SALT',       '5RdK>bCLSr`J$wT6S]g8U4(j8;4uLoh7*|3]~AWK1}:~n+Ei,.A%LP@2W0oZ3]Ww' );

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
