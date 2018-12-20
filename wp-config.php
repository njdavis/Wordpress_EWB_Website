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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         'ljd@Vg6W?a}5-].H cwr765$B|(U`G|?/y/rDsf3YTs!F^k*=5B#WmEJ/+>:xMV4');
define('SECURE_AUTH_KEY',  '@SCy3qPJMk<AUTTh{|r~k:0vY0BGxl*u^LJjXzU26!wnHNw|;fSO%}TGl@Ep(m3H');
define('LOGGED_IN_KEY',    'M(>K3gM>D-E%e(a)nccL4=xc>)rp^8DPH+0stl,QI;Su])L7KN3@[p?nmv4iJdVb');
define('NONCE_KEY',        'o2i:!c,yv]gt1hsAJ]q!Q61ArNvUqlzJcu]rovP:WZe12jDmnNU(&8rw~|$p7_C&');
define('AUTH_SALT',        'gV^;OU|_Y7zF&u.wER}fjOl?mlZ;bCC[D0l@+kk+; *N@@0rJwR5MFqccVbt4M^5');
define('SECURE_AUTH_SALT', 'Q)J~MT@iOT&MFDHeH4)RmHsH#7ntvKJCqVr7&n,Nrb7 ^:mICrK:z^YBio~]cViX');
define('LOGGED_IN_SALT',   '5gDSt}%{-&/T4<6b4kr:?j]N0<+/:5[#[UOXU?(a]A-l!SgaqjB;B;A;2u|pQZoC');
define('NONCE_SALT',       '55]?,:hn!5q-DHO9Tvwo48)-a .`T3xEo$ b3O|.P%(X<W,7 @1g+/br~X|ADp b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ewb_';

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
