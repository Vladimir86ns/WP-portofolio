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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Ak&i3jL<1DnJk{JeBgrp>3xn:S)|_e:9#=bkhH8y_K<9R+etWNZ}8-[J@D@m;9H6');
define('SECURE_AUTH_KEY',  'R;%d&}8|NI_rHnUK26R+k%OCgRqlN7R!77%GmE:l*RqaTO:RY`SRKa3vwe,p]lJA');
define('LOGGED_IN_KEY',    'I(4iy*A^X7_[yU%YN+qRdv*?)Ia=,yc+rV0zspOgs#nhzGZ8M<OwyoaL3U=6VHCg');
define('NONCE_KEY',        '`xiF}za|ypC95?.0f|nF::65b8_*M.5uA)!cN1J;E#E8XH8:}W=}bHlE|et?A+/J');
define('AUTH_SALT',        '1hi8o+)1O~BQ-D&%q,.wFy#LY=vtQsp`cN?_@xByjTj?!o xZBTA1?acd99.qb6s');
define('SECURE_AUTH_SALT', 'haa-lTN>Lj#^xb:rM<Di*fm3uGD#;#yY<36nP>[t}T+JT8U.&}JRW<o(0+!apAvv');
define('LOGGED_IN_SALT',   '*@>H{;P-o;74fR02[.Uj6#NM}aE]], 5Ev(f){69@gP(n~yURE6wHr7ya;c@qGM*');
define('NONCE_SALT',       ' f@SH{01<wdxQF?{X-!`7f0v2CAbpf+^?m})#qp+=WABw1N4;)G(aBJ:vJ]j-#nb');

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
