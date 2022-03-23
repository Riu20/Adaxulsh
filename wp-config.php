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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O{6_W-#h}cBJ=6Iu>0.Mr<EhId},QGt]UN-yAj{|,#5Bs(]b]Mye*R3Q#*Z;BajN' );
define( 'SECURE_AUTH_KEY',  '_kZ!H#h>6E3HOPT[xZ2Z^XWJ9oB<U]^zBchK&1lSSpUsT!Ri`*DF}-X+e6+_d=E,' );
define( 'LOGGED_IN_KEY',    '(M@O~&<SY@;_*Dx+`M_#uV:f0xJhwGvU)Bk5*#0q;Ow^5mBL;<u:zoa,[%ZigC4s' );
define( 'NONCE_KEY',        'gRS,!Gbc(31Bar@sw3tR0:T<wC,K:bV,|B<|LZ+Heuv4/p<8JoT2|0^fY#XJyB|o' );
define( 'AUTH_SALT',        'X_Z)CDf_Arc,X~oPVXpE%YKw[jwif47c}@2I+/mr1D3+h/kwfC$ochs?7H<#kQ#T' );
define( 'SECURE_AUTH_SALT', ']-@<d+)0RKm/H-iCRx`|)6]-2|BuM{QJ=rl[V2p=!V>od%{3G*wO56ouY0sW#|G5' );
define( 'LOGGED_IN_SALT',   '}R/#oInI46|(Q=;:FkoHPF*=,-&Ib[H%gzSTy>4wy^PJg1&Gai4#/|TLaOM,*B0T' );
define( 'NONCE_SALT',       'ooh~W.g*4`)-v%Tx/mY(Q+fkrIXLy0<F=d}$uA?Z@qb2nx3R`&C~EM0^ck4>W<:P' );

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
