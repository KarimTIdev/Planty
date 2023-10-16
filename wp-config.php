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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'o]_R2QBJHK2o(6ch,R}dG~* ~A@MLXK`Tem~VU-QOkL73!_1!TXOr7iz0{c1tos@' );
define( 'SECURE_AUTH_KEY',  'KBmY/QU.fY;WiW7$)rj?/OADi~fP?|!yXh.^(Jq9~Iq.LM@mr(rLg|6Z#9WE_E b' );
define( 'LOGGED_IN_KEY',    '/CB]^tH|a^C}>Pr}qx!%Uhi0iTa65EBoLm}RZj8TL}}pUy#&T=>)`.Gl1-1p3E(+' );
define( 'NONCE_KEY',        'mZN/Cx@/C9U9x3.B+LUbg01^gdITdh{WEYsg8{b$/265xS9X^5bA&%goI<WzA5XT' );
define( 'AUTH_SALT',        ')z~]ES M`>?%v5N2 p)Vhy9Spem-1<UdnMLs!hFj:46*?JsH8C9K)&ItepQ9CE~X' );
define( 'SECURE_AUTH_SALT', '^#arSS3PqqhGihGEFN{Pf8YW/PZ_GMT4 BaX&U>`3:&h2(0UWy<9V5]3.6)e1@b+' );
define( 'LOGGED_IN_SALT',   'K%GexY5O$,X9dD4fFuY;SwP0$<Ls4ZlXP!{).6X5zP b;AG^~]yt)]x_>1t [EeV' );
define( 'NONCE_SALT',       '$&z[8eh0Ctgv#m,b-p|ozmlqxbWloA)1s^,Lr^9MwO9<@L4sHo#Wy*@LTyNky` $' );

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
