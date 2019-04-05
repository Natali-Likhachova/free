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
define('DB_NAME', 'free');

/** MySQL database username */
define('DB_USER', 'user_bd');

/** MySQL database password */
define('DB_PASSWORD', '1111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'B~|k56k+MwH%BoZ[AcFN0%@sm5_p4s{g$PvsDf VThY`O|,-a<rF@5wW+hAv@, D');
define('SECURE_AUTH_KEY',  '-FLlHL:*?=D4SM95,pJx79sf*G$l|(c,mRT]| VKIpv<q6^?Movt8^6vi!/}4CFO');
define('LOGGED_IN_KEY',    '2> iV+hnFks)^^+!-%[<0;`>|6yO2{r>&D#BExc!+p#+&)hjE!;Aa*(/l>)|2Lq~');
define('NONCE_KEY',        '`4LSC0bU|@ONE/u0;ufEVYhgq!K>R^!Mueak.Mt|W7jvL~Z5<U( gAl@TK[*_G=<');
define('AUTH_SALT',        '(cFBhpQ&_1MH2j@7,df1UKZ0<nz];U8y-w0vfC&2YKHl0B4d_3IFu4d71_{EqDE;');
define('SECURE_AUTH_SALT', '!<Scm1:1roJ6cJ`C!^E2m-$u8L7L;0|bNLmB-MR]LL!;+e.}zFU1(a,e1&{:h~#Y');
define('LOGGED_IN_SALT',   'tR7=MFZ$S)lmcKfm<;x-%*v,[eSn=0%A}:+|W^<7<Sktd^[pIS3d`m38;fmANz{O');
define('NONCE_SALT',       'J4$E]Dc|Q7AIhv$-={R-.(IBP/`zxjq-;F_mQgOHPp/v|UXVjdq4v=l{gWnBF`0Q');

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
