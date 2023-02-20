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
define( 'DB_NAME', 'casadatraducao' );

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
define( 'AUTH_KEY',         'O0@pT~_pLXs70Ff8lz?B&kp7Cu0 ^4}ky-l$se,yN}#H<@?_Z!rtThTc!2D1t#Q7' );
define( 'SECURE_AUTH_KEY',  'OdR/IEN{I5fydz/hbY@V%)d$PmigI!6H*40qsD~p}]OX~]0l^DW?f^&7rcWc=A@v' );
define( 'LOGGED_IN_KEY',    'BvZK]lv)b1i?oC_/gOuhU!4JFi{IYjUdYAXHBXP=8$I5*7&S7u.>7dev~q4lzuMu' );
define( 'NONCE_KEY',        'hvLx*3w>%zL/NWR0t)0(2{y>kN7OrFBbTe(7p7j4R@E|1U#/xLOtfnZAbVq&#W}0' );
define( 'AUTH_SALT',        'Wn2r2|iM^UULbrFcik1!N9yl >*mJo Ut<uehrw@kc6=NmPb)4DS>&5}ZB5BKA$f' );
define( 'SECURE_AUTH_SALT', '1!QsEny$(u_w?<$^9|WG/2%DKc3MAGGaKShkHWDmX-s~4-4i{nOg<:J{]7pC^gAc' );
define( 'LOGGED_IN_SALT',   ']U,|_qb`oN<=D6_}.czYjX.Xsp2OE0b&_u]bpiNrHq-h%Nc>S7JjlB>B^AB?fzir' );
define( 'NONCE_SALT',       '|fp%~Jb/}[8R}JMbR^N5CQ[P^<.c+C{/;GuDh*6)yHKNR0KcWP7#)4Wp]Km.Elh#' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
