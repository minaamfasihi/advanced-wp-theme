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
define('DB_NAME', 'advanced_theme');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'bugs123');

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
define('AUTH_KEY',         '~i:-y!_~c*s=-Is]frYqwRT>3@{s*+j-J2d3sHITC9deg;lBE8.q4gx)MR{!X%1v');
define('SECURE_AUTH_KEY',  'a+JgS4~yNv- Kp8JT699[ ?[l}RE*ddB&-X$>(uFC?6Rj|]WRRm*{M>P#wADt?+H');
define('LOGGED_IN_KEY',    'so[j &;3wE{>1aaV-iWIfLyOpENLaU?YBx:J#1_LH-b8~BffP+D[1*(2jD*Q_7j,');
define('NONCE_KEY',        '@Tk*^;Int,V~jAL]>WKK]&_uWrG-@2Ym:/]IncSMwn1;<Zbd!~ EuWWxuUU-:TT=');
define('AUTH_SALT',        'bo:{Tf~$ yw?SEWTcE`K<~3[wX/6AMA`fUE0!gY)NylqtK9,|6WF:+h@%a.G#+il');
define('SECURE_AUTH_SALT', '9c@:PUwK(Us1d^jkmX6e!+BON5fciT/:0ZyxXg8.8/GV_]oIBCaTU<)t`L=Oqs,Q');
define('LOGGED_IN_SALT',   'r2>50_OV$0Q.+*hiF3}Hh/B_v5)DS}*#9A0b?a>0A=[{TO>UHTFsb-%YPCCel6Ec');
define('NONCE_SALT',       ')Cv3u8AF$b@++PVph!(9sV,qgkw$,9O%D)T#w~Zs]v?84(K4`mmz7paXk]pZ1N4%');

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
