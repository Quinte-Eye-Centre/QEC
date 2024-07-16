<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'ritz23' );

/** Database password */
define( 'DB_PASSWORD', 'Clinic#12345' );

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
define( 'AUTH_KEY',         'm?bGf~<~}6GV@I9s GJkeNwE=*WcC;}cJI7fv]s)<qAY}>Kc-x,C9G]Td*9^e4pu' );
define( 'SECURE_AUTH_KEY',  '!l5R1W+&%r|Ye+tr`I>8WBX[ID#_d@o+o={+tnX%:}Yk5`x0$h8]dnj-l6u5:=ET' );
define( 'LOGGED_IN_KEY',    'q@jSO_?hxv{JGnobGz;VM[0gL;b>?FWA%2`[~}s6B_bXO?US:]=<%~)v~xg?!nZs' );
define( 'NONCE_KEY',        'ec0`HY^U57yXN@HmzO Mb8SmGiDa.aS4#`CW!OU3lq41g(JX|$R_P-6L|[Nw53n]' );
define( 'AUTH_SALT',        '*W8oJB.R5o6Alu[Txoa#kG&tuYX`$Ntl{D4&3fv9a+|`xE/G^tRL89GE~G.e*k9*' );
define( 'SECURE_AUTH_SALT', 'KRoWI)aKCWJ`0^24JHPX`ty;gg(];veN_[2|d(L0IdTbVUkQ !8(qGdoG}NUuY;X' );
define( 'LOGGED_IN_SALT',   'Tf%#d]>,Bs2>5MTb2d{X0&D <9@Ud6.7l#5D!jrIT2cW~R.]uQw}kRDt`.>Qvk6u' );
define( 'NONCE_SALT',       'MGhUe1Z$f$TP[[<sC%G|{B`E8Ig>5pt&&FYx6EDid.RU{K4=,hEM<c|1yw^;SGD^' );

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
