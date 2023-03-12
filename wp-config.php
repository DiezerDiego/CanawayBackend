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
define( 'DB_NAME', 'wp_er' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '42001' );

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
define( 'AUTH_KEY',         '[J5Qn!gTjlC%n*J1yz,N?MHKGbN1Z{YJGf!Lb>@mvi#16:sKo(A`DGW0F9!GuB46' );
define( 'SECURE_AUTH_KEY',  '+~,6uDmawC2fy%q#[/X0d9W&1 (1{zPN4cXDa3~/rqTxGkVdDl>irQ@TuIhXFMyL' );
define( 'LOGGED_IN_KEY',    'q#Mv00!fS1[%%I@cxk4PMoJicw;=rOU1c7D!t^-M[#MJSl}84 cmO7.JaU.LpFKo' );
define( 'NONCE_KEY',        '^nhqMpvpKnNT}X@U78S7k`)5YH0 Rb4}nI(|UQ%Zs}<mKH^m)URrXmzH9&31z[jf' );
define( 'AUTH_SALT',        '={L+*kMare.<24v<.Q}Ra@:?de)VVe]w2G3r{/PjUV5fPPuLNHCh*VXw;W?L0i9T' );
define( 'SECURE_AUTH_SALT', 'dQkUTMOgx 6}q5CuJI(P]hR/9NDZ7]XS&m3s+{W$)H7KF`=>q[khw)2iQ^+ 7oXb' );
define( 'LOGGED_IN_SALT',   '69-J*z2ezxkL;UtMFoJGtJeJl|ERe$YJy-2N6o2S6wE3dHvdr{VJWz;<x$+5?YKs' );
define( 'NONCE_SALT',       '49m~P.xd+j]4SfH/dzr92]U&$,&a}{cVO5@@/ l^|^XKZ(y4pUuZyM@S-BGUxg9,' );

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
