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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'corlate' );

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
define( 'AUTH_KEY',         'bA6d_;^@8&nOIPut:7?wOyb6RXCkiRxaWO~1~-x)n 7M:sb-#UZ<e5DHxr]&bjEf' );
define( 'SECURE_AUTH_KEY',  '2S$.`%B%t&3HS*);p >fl9{]jGNCGkl2k%+b(CFI^7,dE rY2`fD_ZE1 U7$cE12' );
define( 'LOGGED_IN_KEY',    '-%n7W2`iW~VEJ?5BHhjs8!jSlV-@|#.<[-,!/UoPgZA!Dqq>.bSuM9z`ZilOA*|U' );
define( 'NONCE_KEY',        '&L&WOl9rC-DwjjIt?eJ>guE0>K6FN!{--aR{(_hrj{s};?/@PV2MTbXBYu0e3#m3' );
define( 'AUTH_SALT',        '{xD_v,>xyF5kC/S91>sN|s9p_hl6@4xABm+X@c*$lrA65WldxuM^{[Js5?JK[/<=' );
define( 'SECURE_AUTH_SALT', '*5/<8oAwKDari6Fz=^[&Qa1cD*h}}Mv:OBbBRP6reHaPo!T|abWB5|km&qco  W1' );
define( 'LOGGED_IN_SALT',   '&i}?ZS ktwAN#GV7X|(IcR8l^$qSOWvL9m5%1Sq#LndG:J@?qrdhf:`a-}4T%&vK' );
define( 'NONCE_SALT',       '9%<apB2{W[~r@=PN?zyVs2^zV&xj;0>:&YB|X7r=7J4#94)TsZ.Ue^UOwp<a0]9q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tt_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
