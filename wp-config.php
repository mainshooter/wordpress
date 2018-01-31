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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'R0qo?*orHn]J%gVvhM|wX7R}aj{kYI;TZ6zZQ)IRE7t)qVRc,>C]o]]6FbICx#c ');
define('SECURE_AUTH_KEY',  '*J?n<Nn;jW`*>gRxi^7KGdb&rR8h9?/9t]57&+j!4PXKT4$0/?yM$txOlsRR5DXO');
define('LOGGED_IN_KEY',    '7~Kn@aF(p,Zab5T}rEy/i~jW^QF6XN_&l5s82Kuyd?]n`E9{(I{EPUk!L|.%<Ra>');
define('NONCE_KEY',        'n6iZHT{m3FgdEg%]CyFQmV0*5M4Q.%g:,mMR#UTmgjW(oD,qE/ZA?+uq9Ee[{%XA');
define('AUTH_SALT',        '^-gmv^90^0vy[+M])P~R5b)r-Aqo0I<].Y~(]6TgKl[1V==vSMzCV+)J~@qz]Ad1');
define('SECURE_AUTH_SALT', '||4XqW.U-d;pF3UQP49:?*}FuB?)UkB }~4&U~986/*PHCzIBI#p4P9jhgz,(`vF');
define('LOGGED_IN_SALT',   '2gc<yTHmR3YlP|$@D5b.*=fc9!)!dmFP+S-`AI9X`,A=5V<]:|014pHJ0f0}}Y(|');
define('NONCE_SALT',       '-FePQH;;A/*M./;?#zU9XquKW]j X[xP7kBR4bzIgQ6uif WPw8W%a]C][79^SrT');

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
