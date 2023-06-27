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
define( 'DB_NAME', 'wp_cinemax_db' );

/** Database username */
define( 'DB_USER', 'wp_cinemax_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_cinemax_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'dmk>=K4<H3NuE^(;=B3;[RR5`FpS7^/x5XWC5Pt+Mm~JPrQ%I[}!pr~Cb[0~_n~a');
define('SECURE_AUTH_KEY', '=pQ@@[9?!f&FOTM_N.uN=AQB)1§§/~`7}AFv?B{I<[nD{IN>4P<R49|NBl [w1Ct');
define('LOGGED_IN_KEY', 'X1qsAL:K`m.2~lu}L3;qtg(L=3Qc+@2RPs9Im4c =4y@UZ]KR):Myr+{.pItB^Bd');
define('NONCE_KEY', 'cDiCKuJ2Y1ni0 )U$PiP@)BGz--Bdz&P!xda4VCQ@QZfQEh8A8+Sm=5BqCQ,@{pz');
define('AUTH_SALT', '&IsNVvEGErfxB3a50t?Zm}Qp0;+:aGolp!7FD4OF~ogkwfS§j]8`9|!Cot7pV+gj');
define('SECURE_AUTH_SALT', 'k?ey<,ussrbaBrMIENs@H;SsCI6FnjTz6LKlW{Yby-YpnZ~@:_6(c@8eIuyD@2?=');
define('LOGGED_IN_SALT', 'P_HPUEAvUaN/7>Dr2!vQJk,H:-/nZ|o]YL3_j:WA]7)EiIK=+^^{Xp%e|/RFp?u/');
define('NONCE_SALT', 'y]KmJIQ$>hHU]15L|zf-gwL41vnCF>0-FwJoDMF|n_ul@t0{nA-^._=KmHX@5(!w');

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
