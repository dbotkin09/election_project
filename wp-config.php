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
define('DB_NAME', 'dano_wp1');

/** MySQL database username */
define('DB_USER', 'dano_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'U]^bJ6L&cEWaQdms2Z&10*[6');

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
define('AUTH_KEY',         'DxHhekjkgU3btTsslexld12rEpphiubVjDh8hyVCA8YDmReg0P0QIXxn0Nbzcvbt');
define('SECURE_AUTH_KEY',  'C6irqaY3694wRAhiCw20znjUcYVBGxzbixHYcMr4m1PTI0NLraQ7PK6lVV9Vuezx');
define('LOGGED_IN_KEY',    'eE7tx8AGjbXGmNalVNDY7AsWg05zJuASQJ5zMD6crBcdwwcyUKtSkLZCsU7O4e0U');
define('NONCE_KEY',        'xdlep22BLTcFhODJmA1dops4EtrlzO9H3zBgVIWfOGwTDjyTUecdXDI4YSlOeBh7');
define('AUTH_SALT',        'YVqCqmsEx3bUf34f9bMYYMTaWwpHHlKkRSTqVkGygh2N4lstOWahNxSjTj0gUz1F');
define('SECURE_AUTH_SALT', 'lBcMibOmj6I3Uq2bSvr5irYnhwqisgpDzIC2BmE3z4cMHTf2IOTjpEcDnoH5hyee');
define('LOGGED_IN_SALT',   'XkcDvWP27kJtwdTIT6EZOqmqiKESjRuo5VUAA0WKdvCkb7bM10OrU7rwXZ5npzUN');
define('NONCE_SALT',       'h5SA688eFaex4HvX1oGWXrKL6nK9g0dFYL1uijnjtzdXBf4i9tYk9fYtTqmb8Ulz');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
