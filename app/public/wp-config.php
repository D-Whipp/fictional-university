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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'XCIgCd6BC76jKTlN7FRjS1LTgi73+ADEeLPvygU8IFzMcJPG44JbSA8+aV5JQ2w1FtI2r9RvhcrhLmtbPS4usQ==');
define('SECURE_AUTH_KEY',  'dIM472PlAt+QZnYucaJZu95ga9z6w5Zc8dYHCxYEdE0JtCZmrnFLo0qabf4F1j3bIi7D6sz/2NrM7q0e/Y6gFA==');
define('LOGGED_IN_KEY',    'mEHqlsLefyycxzGe7sxj89CKYxkBKAmHGvjqeJk5j+yo31sOfFaYNx+lEbOWcioRuTfXPgHq/DSBdWI+htM7RA==');
define('NONCE_KEY',        'oBxjaPT3dBlfQBcVKfJ8IKYOPh3a6Z17w4aiS9RT7N+0CFikRxfy5HE3W3CXYpSM9a1IH0RYlNcJOMH1n02qfg==');
define('AUTH_SALT',        'oE+DBPmBwQiFnc7/Z9Bx3VTQfa4YlihoN7XjgHsS+U/tceW+GdDw9vCfVxeuvpGsY5uexh26lDndYHsIeI/JMw==');
define('SECURE_AUTH_SALT', '+QPTDd4DKwpsDGQnS+NyJauaEtxG65TRxKY1TS0PMAP5zWkLkvGVYKOf+d238+/dyk8w7XvlcIvsSpBdFtIK1A==');
define('LOGGED_IN_SALT',   'GRWDRlMHhiGFDOedlwj4kK4Rmkj3di389Dn18cItuR7zzuWjrcR8M0KglMogL7KbBPA9zApaookRERXjGch3Bg==');
define('NONCE_SALT',       'Hjd1a6r7vKjHKECLIBrYp5HyJTp/pkNIrnjZSfuEESW/JN/n7MFn0G7mJiUqR0HeChfTln7eOxptPy0xJ28Fhg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
