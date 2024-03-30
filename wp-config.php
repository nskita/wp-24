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
define( 'DB_NAME', 'nature' );

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
define( 'AUTH_KEY',         '#)Q^WxcM,0HVK/39o09Uk2-Nz<Yyy:&^_Q)_q|Q2( ^zjrU$]c@TI!PpVLt[nj(i' );
define( 'SECURE_AUTH_KEY',  '</4nNZ$dA9#s28H}ahziwW1 op)gnP8[/O&.wlpzW] uoKxXy9c{6Nqt:3~X:13`' );
define( 'LOGGED_IN_KEY',    '=m8:z5O2 IPzjt4FN{a|M4<R,XKo;9}Qz5Iq7{-/97oxT[rfYCMT!)X<5SWXAr)Y' );
define( 'NONCE_KEY',        'l=Wj}RV:eY#, U,F#v9+_y&L{=(b3RE.k[/tO-iOR],9Rs7z{r~4aq4#d/c.Q/0;' );
define( 'AUTH_SALT',        '-Ub#e=R!K86x]0.@SNDRv&$gt%jIf#8e-4?,y{t0rs`OSUrf>-UYR@@:*@AG_u 7' );
define( 'SECURE_AUTH_SALT', 'TKh9 <UJ)K&,q88sfYvhKvXd`|Zd`RrvK>nK6KQa:0CM;U.*cF5 T*,IL?_G-iJ#' );
define( 'LOGGED_IN_SALT',   'L4vY1{K<b#(~U|GQ5;*RX,HIim$Qr $8^U(4P0jY5[t(6OFSF9G-tIM/G:#6_Pdu' );
define( 'NONCE_SALT',       ':traE>EI:c5B4Mn4]1dqJNk bVzTHj|KFPC}i0#F$%@W@a8JFRy>XDa+*O{,HiQa' );

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
