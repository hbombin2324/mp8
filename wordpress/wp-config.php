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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':ASX|lMxM?Y^1h<dw|yFML1&|nR!y*C_be$Zo d)Aq8w-ljNQQ5(*Pn!:Kv(l6C$' );
define( 'SECURE_AUTH_KEY',  'Y0idK7(Tm?)*tKvjE.l$|J4?uPVxkBw]O5ywZwM*Qg%~tIqT}up &#>dA{wDLT{z' );
define( 'LOGGED_IN_KEY',    'qGuI5|vc)O@&>cxv!edM6}$-M=]:IgZKVqiXl*f]]YL Vk^% /5Nqr.wT,}Pjn-c' );
define( 'NONCE_KEY',        '7DiWD9d}ij)9+?!egea|n!6;@cwRrJ>@f(9@J8&CAb+v,fc_PqN#^/;Z]@Ttey3_' );
define( 'AUTH_SALT',        ':zxr+DK(JSg-![!;moT=JCb(kbz4 [b#C?2?;0bi)?3|kYOOtqo&8u.jex_p>HQ%' );
define( 'SECURE_AUTH_SALT', 'q?o/V_W=`=&wn<p{>Hunz:Y$2-4IKVZy|v0*VGZfCsTF!-{mBT?0#=wa7{;yxs~P' );
define( 'LOGGED_IN_SALT',   'Z)u(R`b=,9F&Ex5rr@6;&y^?}N,8:M>|q^lD)Ri8jYg-L,~4ZO6K!F62J$vz zkA' );
define( 'NONCE_SALT',       '9[u<I.B+R>L~wu[mS,o>qI glO(yqq_FCn8n2+sTs~ K}cA=VvZNy^|$T=/} qcl' );

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
