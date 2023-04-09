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
define( 'DB_NAME', 'firstwebsite-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '_)Cu)(ehPoTPuwJ#-q?k02Abi!RB/l)y<m@b9GAgSmo?`?gQXEcO$PDb._Xrazn|');
define('SECURE_AUTH_KEY',  'E%[fxZU)P+?H+(qs+;|/yjL))NN]UZFd;U@HCW])wo#+UCM}+iP+mWE5be[}exj!');
define('LOGGED_IN_KEY',    'P)4xtyA,w6#TsFu>$%POn^gLhttcaG4:l(YuD4n_?,E?7a(lmdrC;^(ARa-^wr]2');
define('NONCE_KEY',        '#8~&Lj8>?rD`;t[N-eRI55HWgP=l[)mvdv Rjz6},)e-V?j}G^/K5PwG]b+<38Gl');
define('AUTH_SALT',        ':-eba#zhy)Z3/-Fc`tV%5#E-`v#2zZ! (h@a1eU+&( I5-$fRXMP^3J-.H-QZ@yu');
define('SECURE_AUTH_SALT', 'e+im[U }%:Lxx4hge5C+z}9e<$gIdhnzMW) /xYD3rc{GsX?Jc:]8TS2(#LVxP`y');
define('LOGGED_IN_SALT',   '_,yTzGwB.#S(y(|,sD!~Lmp@2)+]_nS791)?x>>p&SoY&VN|r<z;]7fr&< XmIR2');
define('NONCE_SALT',       '+hLi+T2ls5FnA@pLv*=GZg),c/yf+FQ[y|%+!~%wq.p#b;H/L{/=8|r9NE 4WhYe');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
