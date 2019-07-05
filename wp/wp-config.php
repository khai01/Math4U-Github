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
define('DB_USER', 'khai01');

/** MySQL database password */
define('DB_PASSWORD', 'kal0109');

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
define('AUTH_KEY',         ',,tUqyV0/=Nyi9y8fXNbnN%(+ZK6P,uWb%+x88fU;Z{-EO?a;V1%|SZREafOf%#,');
define('SECURE_AUTH_KEY',  'x%D8J|SbbU-e@bL^w(W0v5/*o[<<Ov/Xw]hBFkc1`[3+!8^gM W/2A*;Q-8NjD-Y');
define('LOGGED_IN_KEY',    'K1G/T]a;*_z` `7.fUe+P#A(%r[Wb~BL6=Ws>7*XHbs(cCj-+.KgF[e@FTVEFh;`');
define('NONCE_KEY',        '+{I2OuCuS+7>vt|+yOWU+bFRxC?59%)@KLK>Mv1h?e9K+|c!}WQYl&B~H+lmM.yT');
define('AUTH_SALT',        'aA|biSk57wqn<TAOi?@+UbO 6308b]ZeGt-6K/M7h4j#mPOaDWoSmI!z,G-t-x1a');
define('SECURE_AUTH_SALT', 'K(_J+}H-*Wy8%Hib841/:k^I#B-`5>uI%00(#c=L;fKXpuq4Os++M}tpl|ItWCZ7');
define('LOGGED_IN_SALT',   'a:YUj%r/M3TQHVKeXK2k.~tvle lQJ<h3Nr5+6#3D%kj4u`G.WZe=rG)?;#r-Cl]');
define('NONCE_SALT',       'AG6gI:zGFf3<TR$$dqxN*XNmU?87e1l#ukxqqyj?!,szQzX+8*bK7Lm}O%$pNL!M');

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
