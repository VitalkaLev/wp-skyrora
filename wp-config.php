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
define( 'DB_NAME', 'local_skyrora' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define('AUTH_KEY', 'k;>FqP|I[p@:<7DJG=J~?Bc5+bGitZ,cJH%uJ?^|[&x-Rlf!oyu.6 9hL$N2LS$a');
define('SECURE_AUTH_KEY', 'k~Q!~%HC3VELd(._hqRq8PB+izFj+gPNVg0^fPlAp-_E|!KUqvF^86pE}§>vVoe8');
define('LOGGED_IN_KEY', '%,+mX?|nE~Vjp4Q36[T-,KY~@]KVq9r8N)/MPpXOy(h(D?Y@,Tvbc§<$ZY o^lU;');
define('NONCE_KEY', '(FZ``L&S(8(6tq(§mk?f>}&T+)L5TYIZV,FX vzPY EIj20u.PQi{-M$AZF6<yMz');
define('AUTH_SALT', 'MM^?eMy9 cW+cTPWjY,EAVwcW1i3zOB{i e=JJOF^[}Szmrp{$@;squ,zbR}w+AU');
define('SECURE_AUTH_SALT', ')§WtKjL0 ?]%qq;0lCaTy9KkdiVwr§wcl&r3M_yYe@9w.Fzy[vIX+w;Ae9[ua;^X');
define('LOGGED_IN_SALT', 'ieWHLVd}R.Q@?Ekb+@bx@O|K%$RNSt§Y<@ w;hA6AW mehl.M.N%?6q:)zT{Dp2p');
define('NONCE_SALT', 'kB]V^<>w}S1a/60?.2VK|Jx^T`&=Q{&n`ltoc@hj[^BDe|s`vF>@=>%w8hhyD$c&');

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
