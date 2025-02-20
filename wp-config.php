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
define( 'DB_NAME', 'dbportofolio' );

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
define( 'AUTH_KEY',         'STNE&I0MGR(A1]m2jNJwr~Wk]a82iw|4G_xEJxQ1w5/BW6(uE1U1fjTrz~YcBvBF' );
define( 'SECURE_AUTH_KEY',  '%yl_rt_1*grNf,;8mDyH8[+k99c=x;^j-Onb;.*3`0qJ7Lga[t}?!l<1L07OX_J^' );
define( 'LOGGED_IN_KEY',    'G6:jn&rI*4CeLx&g=d#xPY+%9)4/lwXaPa14N|Bvm)?]b/7l(}<bCD`Z@iDW,/}R' );
define( 'NONCE_KEY',        '0~yB$aTB6i7Td!Ev*h$J5-,BQdh.Q;p&&m>[i`rZjO6^Q(f@tVhf6$bFz6(WctcN' );
define( 'AUTH_SALT',        '3<R}Htr5pB@uD]3OvoAF10p`9%7g(r`4RH}`7]ev}BRQdhLrIx*+N2D;n?%`Y:Fg' );
define( 'SECURE_AUTH_SALT', 'Vu>.mu#t}6D]yKhFrJ! 3&}ftzRqrY10KyG!W>_Y2YA@lo%G`R.}y9CJ[Tcp|z;(' );
define( 'LOGGED_IN_SALT',   't=[Q(y8*DSMUlv;JrL5q,L1K9P`Q61Qq2}g+7}z}!<X=xl+Ga,#)aC2szg^.~C~.' );
define( 'NONCE_SALT',       'm4g?~B,Wn(J <v#ihHwL]1l?zOT>B<BwDG,*p@*@p#bdVAEbq+W%qlZ2I3S7-gmJ' );

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
