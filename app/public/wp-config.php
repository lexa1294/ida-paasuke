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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2rLQDjMcDkLtjW4RE5XuZ0eB6ZXOT6I/8aj2wANv0fNyrhweW7B1hDQ+J4HYm47Y66i3dZISzg0VeSx7q3d15Q==');
define('SECURE_AUTH_KEY',  'mkyTrtaeZRbYBL+ZE60KLzwdZ9DuohE3IS130qktx4ZIYNQHl4fzTB7e5BkGcYbp6vSpzHd43gA9MR+WKGGEHg==');
define('LOGGED_IN_KEY',    '3fms2qydA1tlgVzKbD13C36wu8z1XulVp+VeZaQPHXyYL247Q6YWBHfJuidWlEWeVDCU1lATV+T54zyKri3EpA==');
define('NONCE_KEY',        'ie8OCLTAFK8u5mDYryl22CCRZDiKmtLqK769RfNTZ5cz4VGg63K+teMXlKVlhTxw2nRs4tvtWo55kUD8uxs49w==');
define('AUTH_SALT',        'Ge6OigeN3r2bcCIg4qV2YIilqM/gP+9S4vZ56wNyvQgXkKL/QN5blMupyVVL1k8I3uF5rEHSWKMQLIw+Tx6WMg==');
define('SECURE_AUTH_SALT', '0g55JJkV8yCzyqQTwlfPIxsd9zk4KTaNcpbdSL0ieri/eLRdFr+cvAUrNh2HMKuMwVkY8rZi9v/W6F8Vx+9QZQ==');
define('LOGGED_IN_SALT',   'HrCIn/84TAHGG/ffUj7zkEN2EXD+CFrM9jVW7hF9FcQPnMpnmZuaGPImOi76NdctuYh696FY1Zlsk1d0CDNB8Q==');
define('NONCE_SALT',       'j3uAFVJkKUyiguupddW++cNkYWhFRilhQYNqcLAbXBwAJSIHELL6VN0EVI2z5QjEhwAYdPyorivxe67p+lmMLA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
