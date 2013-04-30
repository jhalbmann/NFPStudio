<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost');
define('WP_SITEURL','http://localhost');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nr6hwdnV iUEWeOXV ItaxR8JV AFfJjD6b KaxaFfIf');
define('SECURE_AUTH_KEY',  'noDslYTk ofTAGHJZ esnJcSOk yKWb7Z8K MYWs4KeZ');
define('LOGGED_IN_KEY',    'cWOb1OSt kHKW8rN5 CotBl4j4 G1bR4uRY ucFbSUO8');
define('NONCE_KEY',        'aEVOavaj P2RZS7Bh 2lDlXttk OTfJG5yq lNUGjDWe');
define('AUTH_SALT',        '6yf5y2OO IUuBwYKz LpJkyuWD kEkbN8yF 4XKFgRqy');
define('SECURE_AUTH_SALT', 'eBYaWu3N yizdMYsm 1zBr16HV JSvAGYBu aalkTm6X');
define('LOGGED_IN_SALT',   'phSHjXvk pTMftb6Y Sk6hDckW 62ZYyuHI eYwnrcrX');
define('NONCE_SALT',       'n6BGE7Pk 1ihjksgO TQLvlIy8 jwRgL3IX JTt8oMhx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
