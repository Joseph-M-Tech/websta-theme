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
define( 'DB_NAME', 'websta' );

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
define( 'AUTH_KEY',         'vIE  nj/!C_lRk&z!}Q/!+k^v:?T6R6Vn8jf@BGTm{Q*_pb`G^W:5p#ysK%&C=&x' );
define( 'SECURE_AUTH_KEY',  '&/y|Exd6PsH[.nKIHs&Jb5kFgv+,c>QANAAfQi%}0]}2{{WL~eEV:W!uxT}5lXic' );
define( 'LOGGED_IN_KEY',    'X/_MRLxSghuH~VkdK &yXLM,e$m#x$C}XC`xn2}>k]F?qs4L7zT|^ZPK16Lj`[yc' );
define( 'NONCE_KEY',        '[eb@g~K&FtzcV:;MiDNaa`f{:4,Uw} M7omGirj i4Y9*V{& %_IbKR;{MK|MY/q' );
define( 'AUTH_SALT',        'cN[PfF)&=D+,MUV!V$25L9M0d=D#(K.kBYF4s`Yz&wVPW7kShA]SzhXpf;uuM578' );
define( 'SECURE_AUTH_SALT', 'ZPYTSkfeO(QV?/qKZ|{iPm?~#e08dRr:J[lo_Lw%bCN@[~CGr8uo*Wgv,!+ovKRR' );
define( 'LOGGED_IN_SALT',   ' S|5XskAK]1#p?]&j }=?WY+$XeHoO Sf gj^[J/}RbDdk0mUKL(`U~TK=q!g&.X' );
define( 'NONCE_SALT',       'x[Lw}Z )^}Y0,FU0H2l5E)`AqZ;_<{pA b|P9s|iWTX^oB2>qW(x^xzxT .a108s' );

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
