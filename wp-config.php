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
define('DB_NAME', 'gallery');

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
define('AUTH_KEY',         ']*?~{I+l=ongmjm7zcbTu@:mZ_,Zq;m?t0.Gj>4Xn_c^J&97&D|7^Eqg#Mv[PKzm');
define('SECURE_AUTH_KEY',  '>u5N~3EzhJb`)df{DB V#M ALlUYAi#gi;/eOHm(N7LO +&SpbL-=fQ/0$Gw]&vz');
define('LOGGED_IN_KEY',    'it%.l*ZmT~!YYYa9.^he%,XtTCf$9!,J(TT]E$oqcpcy5XEuZ|,)Ug,$$O:L5iuD');
define('NONCE_KEY',        'Zc2,^.c2s}76qA~hpN6]0JjFBLA`.]ZUDld9CBXfhPgz~l!r0Br(-Q!#7D|5n)ws');
define('AUTH_SALT',        'jTJ[x?iM@#X%f3W~!lWO<6;+?<v1;~r>T1BsZGbD=W~f />J`|x!@?]h76Yr/E87');
define('SECURE_AUTH_SALT', '-.[ozB[!+.Fgx5E&;p<kw@}Mt==a:I$Ix)d5{;]wC7/Zc1E=PrIE.DZanYtYa{t<');
define('LOGGED_IN_SALT',   'Yz$WVm^1>;#%}X-MzAOTdQ~[rr[V;f6BJ(~>2w9CRc;$q[a:7{%PckGPURy!Ye^p');
define('NONCE_SALT',       'IGJWO{bD+^7>X43ef)[e/5HdZd-l%8_ZhKVpczC%?#|<d!NI$:yLzH*|zlJYUbMq');

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
