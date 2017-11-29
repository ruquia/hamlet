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
define('DB_NAME', 'hamlet');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'pI}.;VSf:6#G1ueE]g;Xu3oZ0oPo0#%1z9`Pd4Lb&F!9m0+wt:5:Y,[uT=4FQ8,r');
define('SECURE_AUTH_KEY',  '87A#R[ s2aBRW7%[X@b-47`a5&5]i2;2xIOi$RG1NC;***7}zL/,|@g0)na71qWx');
define('LOGGED_IN_KEY',    'g+s$uvjt05IWO<_UG <uOqE,}@[0WklAey9J>|O0@4*yPRr(`5+r@:KZ.3=Te3AR');
define('NONCE_KEY',        '2J&V!^%olv1SXZPF^;Unhz+~ZY$!O+mKqB<i5aCCr%Qrj1M7ndpjwJE6cISXCP9c');
define('AUTH_SALT',        '9}w8CWyh5Ne&ur VQGUVb$I^A)4ML}(APNgCBejrH%|T!2E!mapGu9Z8Kjy[.aB/');
define('SECURE_AUTH_SALT', '&=*11UI:xTNX/S}}-~4T?-ll<K,=Vps3&IO~V#(DF,,}3WTe;aho*;n1)J`1#g F');
define('LOGGED_IN_SALT',   'jDHkZ<r7cL!,y(.TL%wXwZ[uPAU0,T=l|B-9&L`OSc91cQt0&Ge<~:g&/oAD(9,$');
define('NONCE_SALT',       ',d|BMKY#0tCP;LEc#g[^7Z=jmtl,JQcjU2nT:nn*(v$fv<T)J}]cZ%U4bA.y!m9/');

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
