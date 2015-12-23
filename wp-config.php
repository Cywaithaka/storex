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
define('DB_NAME', 'shop');

/** MySQL database username */
define('DB_USER', 'mysql');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ra}h(.BA])<tM||ogqQqmSrAG6/R;|-oHb[k-El2R.z:ytbaOoe8xr6Wtp-f4>G:');
define('SECURE_AUTH_KEY',  'K8wbL=Z ^A|tVNC(?@wpcl3}8NL>maw |}*QGvGww.Mt+^+RoLpu[#rnnwi.ZO|m');
define('LOGGED_IN_KEY',    '*[/98|Pe0INcm+0Q0Md$+wr+U a2}lov*r_( 3vuYK{JR@ob1MHfdAU6|MrE+8_J');
define('NONCE_KEY',        'w6Y1ev+K|Tl.l|6$s*p|o[`n.>j)VdEii[||)f$+k-|>~2R*cc&6eJUF>>Y+@kZ2');
define('AUTH_SALT',        'Ld:{{~&2@>^I6or>#w{D={s#Wd.$;,0dTpixEj=0~N(aUVS[WeEjmEN7$P*?t1Wq');
define('SECURE_AUTH_SALT', '98u?3#j]NC65iiX/57Ld* >V[H,{aA/9.6U|h}OmHwYY`fh=.u7.lGl`!6KQR>@D');
define('LOGGED_IN_SALT',   '>9Su49q?$( 0x ;D(BC)shRT&tA0el=.ydvpdkqMD~,MV+i9.{Dw]pzlna5b]hF4');
define('NONCE_SALT',       '02jJ_HEhAFRn),}.ZjLMmUIPo5,U <6+=#N5as>M X5HpUX5,C|cOL@=9wo3uYy,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
