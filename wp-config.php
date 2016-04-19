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
define('DB_NAME', 'plan');

/** MySQL database username */
define('DB_USER', 'jonathan');

/** MySQL database password */
define('DB_PASSWORD', 'mecha');

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
define('AUTH_KEY',         ';u-|OtR3CY^kCxTf-2*i 6T>PQ@HiYRF`xh0~Jp?}?*:u_y-Z/$1tPx<g`= zLi{');
define('SECURE_AUTH_KEY',  'JcN9f#b@@u)_jm3qMW6]ow.:gjp0n{96)i1.u}9Jw`4=R4#Xn+|C+KgARkSnD>jP');
define('LOGGED_IN_KEY',    'Yz#JS/]A:z#h$_t,!z[Ys;]smg%w`EHhvs3vuZH}ZDF8~SE2WL,9Y`tojOx*#G(p');
define('NONCE_KEY',        'xu/W*xavWghv[1Z-~WV#!v*Xu]-@a?ub~}b1}?%F&zW~JRpe_~{; r}<GZiZ*&Cw');
define('AUTH_SALT',        '5sKE@AF`)3A_8Q W9kIU&c4Cx;GM(_c,UrW;%^jrHA^X)0i.|+Ju~z@xCwft0_HP');
define('SECURE_AUTH_SALT', 't6Z[gPo+cYrv@~-3=zI3TloTg`mA*Mn<X+Hjf%jgxo2htK$<Nh.Ldsgtf<,u,A,e');
define('LOGGED_IN_SALT',   '!M6*6RFi?QMH5h|e`ZL@v|^Y/aE_>A*E55ihxL*+?,+UKk2PObWxhLA|$qC0Wvp]');
define('NONCE_SALT',       '#k:.MzNw3k}4U!3+d)P%z1t5:M[_aLFj]a`$)+=0NX5NeNX@P3|7K)2;Aa=eIj5>');

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
