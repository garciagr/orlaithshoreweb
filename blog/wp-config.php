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
define('DB_NAME', 'o569134_orlaithshore');

/** MySQL database username */
define('DB_USER', 'o569134_shore');

/** MySQL database password */
define('DB_PASSWORD', '34Y7p0Yowt');

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
define('AUTH_KEY',         'p4bMQ S64+:cVl#.F}2~natv4K^hU2/ee]i+5Ct5e^ApYrM?4N@|aoRq`1{w:iF!');
define('SECURE_AUTH_KEY',  ']idWaH)1?qzv|t[.Ps=g]^&p*BwSCy_d;8G{h[QF>;}1<ImB))+KzMO)2>)FSh.A');
define('LOGGED_IN_KEY',    '2y`%Gsl<o*1O}3o~cGN b(;}jKL[PnPs1Mmf/h>[]#*BarNv(#wDPCRP3Qi6b27F');
define('NONCE_KEY',        'x$={%M%)u_2C|EFIq+Z}a(]JW6I]P/5K7EjZwbg}?MmYgo]F1c#d9wKPe%@y;w@_');
define('AUTH_SALT',        'nHY0$&rb%|XTn7|PDlUeO8USx%,+iQ6:(:0?{3RhSO(<Xw3V*MO4Q~3D.<,FLEcL');
define('SECURE_AUTH_SALT', 'A?l=LFC FsUH}XOP|C[>6S02x+O*2,i03,d$S1S%<:o@aGob ;x)%:3~x=RenO=8');
define('LOGGED_IN_SALT',   'VD*<({g9?2+eA/a{SUBd>S<K?8]<]]gp-0S-Lu+Qa+u0*g0`tSV *u&&V}C;12Z<');
define('NONCE_SALT',       'nl~`1z;@m@XAUTmWc{Gk<w47n]Hgo+[fClH_e9qv5TA[30,]RV7#e;|wO6C]_P`L');

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
