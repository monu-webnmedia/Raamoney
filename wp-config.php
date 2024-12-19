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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'raamoney' );

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
define( 'AUTH_KEY',         '$+CtdZ8h eB&v4S~PzmY7kSK:1N6Zxz$NW_<hd=<.0>Cv%?jZz p5ci}UFBH=6Q>' );
define( 'SECURE_AUTH_KEY',  '/CP%|MBTdy~%Lq!+:`S^guW`H+:inG BUY%WIw.~/zO=_5iTbX/MxBd0;{?^k>{v' );
define( 'LOGGED_IN_KEY',    '/B6 3i$t@yp{l-g6l;XK@c5&H|QWmG=:.t3.,9X1aulWQfRPpUy_K3H&7|bLB/RY' );
define( 'NONCE_KEY',        'RHS2(Td0$QPNXtB^E!Ka?QF)z(HzOR[n;2!8C%V=_);J%8I6eRk u9.XND@Ax_N#' );
define( 'AUTH_SALT',        'Fyn/Iw`lgHo=3CU[Q#Sdon-rrWnS)3PXyfX#4bXlg[O{;y:YQcKO!Dv^z}Ik#oM%' );
define( 'SECURE_AUTH_SALT', '7L~4|Ygm<oB7fQ]A# }]zlnweujZl),o/C#%OC}deCQ.w@d08S.?vk<!8<@<&f(F' );
define( 'LOGGED_IN_SALT',   ',oz!q+![%^UHZQ<4O{mKd4-c~L(#C[MajXSbn~K;T<r:kJd!/)$GB5!{[W:=kn#2' );
define( 'NONCE_SALT',       'U*&-r#MbcrXN%wl!&H6|b?& fm5fMq)ON>)_6i!/~=eLikZ_@rSufI jm?3nsvK-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
