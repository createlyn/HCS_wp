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
define('DB_NAME', 'HCS.dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%na0FpEo@SP+p8VcX&VxC6+@KN|b|*t7}|8*_G4=s(?BY@ZFFzs-0}5V=81`D=U.');
define('SECURE_AUTH_KEY',  'B!3P%KhX|zqiiaxr/kdFu!NMKc|y8IA4ncFPlB^d{^GXH3XKl94]$8x`=!i|vYy~');
define('LOGGED_IN_KEY',    's,I^HYtxoguuF91X=p)1Wm2@Kyp(Xh0VU,t^:,T>d~[M-vvyV8m^=5X9bL}s# tA');
define('NONCE_KEY',        'uKG281>,XE^(PMoazIqgic2@L)ropvM8~4-4#cKQEZENv._OcE.(7@giz1B~>q8?');
define('AUTH_SALT',        '?d,<Fg}-V4ao][%aR&Y$#:#>&+zN3*/[SXcgg#jl=s5qzS$gFi;f4PDb NMgS13=');
define('SECURE_AUTH_SALT', 'f}d}bW7|N6 &7a7=ii3y.fV%P2.jZ8 f-m6?wB9fG#nMF$ogTZ9Ae)BTq+[f2xlh');
define('LOGGED_IN_SALT',   '/<>$`NI`5Qt s!]kd[?5D$CbykEyJWehjGoP#xd??d*+.cMV e[8wzqqg!y68~OM');
define('NONCE_SALT',       '(!j{;7[$h#*C)<D5jkAWtpQl+#)P0r/:.@TX::j$[ftVAhy{u*}#2rl0Q`^m~|w4');

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
