<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define( 'WP_CACHE', true );

# Disable all core updates:
define( 'WP_AUTO_UPDATE_CORE', false );

# Disable auto updates:
define( 'AUTOMATIC_UPDATER_DISABLED', true );


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'NEW_DB_NAME' );

/** Database username */
define( 'DB_USER', 'NEW_DB_USER' );

/** Database password */
define( 'DB_PASSWORD', 'NEW_DB_PASSWORD' );

/** Database hostname */
define( 'DB_HOST', 'NEW_DB_HOST' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'NEW_DB_CHARSET' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'NEW_DB_COLLATE' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NEW_AUTH_KEY' );
define( 'SECURE_AUTH_KEY',  'NEW_SECURE_AUTH_KEY' );
define( 'LOGGED_IN_KEY',    'NEW_LOGGED_IN_KEY' );
define( 'NONCE_KEY',        'NEW_NONCE_KEY' );
define( 'AUTH_SALT',        'NEW_AUTH_SALT' );
define( 'SECURE_AUTH_SALT', 'NEW_SECURE_AUTH_SALT' );
define( 'LOGGED_IN_SALT',   'NEW_LOGGED_IN_SALT' );
define( 'NONCE_SALT',       'NEW_NONCE_SALT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_POST_REVISIONS' , 3);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '128M' );

# Disable the Plugin and Theme File Editor, Update
define( 'DISALLOW_FILE_MODS', false );
define( 'DISALLOW_FILE_EDIT', true );

# Block External URL Requests
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'api.wordpress.org' );

# Empty trash
// define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
