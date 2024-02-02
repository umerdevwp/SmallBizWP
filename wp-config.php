<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smallbiz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rJ^vP:KCAX{9KqhKLtfP^+ekE?&J1fX|Ga,d|5+D4W]T1 f0fQVxD%XFv Zr8k*h' );
define( 'SECURE_AUTH_KEY',  '58-0)SI/=_QTKTe4a$Vkq0BY||-2e$U1FIWv`iy/1,k&~YxA/WM`QS)4.:tk[^9;' );
define( 'LOGGED_IN_KEY',    'VlFiyUGARD|lWi} IoA.[d:5.=6SwA.P_Pm>)ONW{#Dh4OuMRDm{E#UOD&;gI74R' );
define( 'NONCE_KEY',        'S (=s37fu{Za=N:i{Rr4HVaIocv.c9ww1s+]S:VrpANXg.dUtDv~XKtGZDA_{Vn8' );
define( 'AUTH_SALT',        'd1F+=K|]Tj;_2FK15P~L 1Ah(P6nr1zT}OXi7[|5ySLp2{x|}2I.$o8ux9IW73K2' );
define( 'SECURE_AUTH_SALT', 'ERNgaQpOU+Nxq#TkmIA3r0v>8bfXlhgWmrNUFd3=^q>{Go?A(i-Ld@i9Lk,]O6tV' );
define( 'LOGGED_IN_SALT',   '4jbbac@v>POj=$U/|lo!Z`.5dKun?fQzml>R/`T9H]M_nXjx9Zj1bJ8KV@GTQBB0' );
define( 'NONCE_SALT',       'nFK.mwPo0H~WnAxj|Q|4Ng~dJ8gG/?rXBTBVCWteW~QX9bYN)p(&6yizLgPbsk9;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sb_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
