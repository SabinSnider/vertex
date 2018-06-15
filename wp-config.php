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
define('DB_NAME', 'hack_db');

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
define('AUTH_KEY',         'FuyuO5l[;FDZeatOm]j&%q6%P93y(3  1X3i[`o+O%<g.`EbyaUy:.Ol^pLW$f8 ');
define('SECURE_AUTH_KEY',  '=09$-vfuI`+wum4lG^&swM%7Vu5/3SQ|9Iw(j[/$odlGe$<8kYR1w)22=%eU17WB');
define('LOGGED_IN_KEY',    '%%r[Up7* uc[`Zp6nVM+r )jf9a0Pd)`j85f.y0.E*%/l7Df:W[_)#7(K8k~D;|5');
define('NONCE_KEY',        'g=Y&YXcWFJ5%TW>%<F(-]S>mo5+Z9Zaw*]1;qL2-0icvBVHZoitzjgOMq=|3wv|=');
define('AUTH_SALT',        ')L=k;-)MMY7!#5ADq0%.eZ]i>Zcw;1uSKWcuic]sf](.!8CtkEbLUNM(h]d9/iQ<');
define('SECURE_AUTH_SALT', 'jV)yHmB{p}8c[Y12xB@ crdT>r,9=lr-%={4(%<V:3S]TZ{JcuJJotJ]@RIY7W:C');
define('LOGGED_IN_SALT',   'Nm7rVTI+{22%[?5Kq9RA^#eYD5Fu_}iCyO9VV@CLi<}}3Cml&?3~^~1+x_i92h {');
define('NONCE_SALT',       'YbLzz|3Q=ikD,[cwI3Uwb.niNpF7.|y-xN,Of1/j2os]>Vb#z|$$;K5[AE[w|8^7');

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
