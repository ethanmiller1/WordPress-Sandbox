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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'emiller25' );

/** MySQL database password */
define( 'DB_PASSWORD', '1418salem' );

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
define( 'AUTH_KEY',         '*#{CYo{3.=fBLynpL%ev^RGm//gX>]t#+rhtL_LmSE}`x%@A=w=Ecz<=?SCN5uQ:' );
define( 'SECURE_AUTH_KEY',  '7oDb9Nj#c|`!?qBk#6TuhbZ@M&EPWCVBP]`=Qq.Q.)y0WE?g=A(W<14~o `Zx^35' );
define( 'LOGGED_IN_KEY',    't]9l72hyHp!oioq:[uP{g{z!d<ro@JB*dL4HHte7ieR#3utX)C3>fnTT>46UM||&' );
define( 'NONCE_KEY',        'FrC]tp)Xce0E}C2:[.q[HUPH`QJ}9FI.)k)hzu.YW=$gFc<|smceSeyZH2q7Elj6' );
define( 'AUTH_SALT',        'rO2w)aoDvdsz[+SCH0)!UWY=%cq0mp$0?C}(_@w4mgv|1`I?cqFz@<JyuQEGbt}M' );
define( 'SECURE_AUTH_SALT', ';{lbK^+@SONKiv@@Z!!%G;4AE]aP%4R_h0 1hc#MWmFMito.!_os^8?f`5l|=euI' );
define( 'LOGGED_IN_SALT',   'D6#TGN+HnZKaKUR_5*dQw=u?E:dyBfR4,!_$B/a0m;=?V_pLw1qhYgJD81!2hjMd' );
define( 'NONCE_SALT',       '(h}Jq(O:XA;5RU3;_DGSZ<l4CM@NMSw$!)l#|W<CH1)Ouy7,,w<+Nkyx.thE-Z>R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
