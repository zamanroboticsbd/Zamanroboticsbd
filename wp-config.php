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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_29824346_w772' );

/** MySQL database username */
define( 'DB_USER', '29824346_2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'z)8Sp43p3.' );

/** MySQL hostname */
define( 'DB_HOST', 'sql101.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4cpha9wrrv4aoacwfbsmqebaljbeb3z8gih99fpsgclmauxq0cibxuzb5nznkrmg' );
define( 'SECURE_AUTH_KEY',  'kbrgygeexnyqwgqwa4zpaibmshyee1w20oebxpuqcyztyxrmo8mnt1wgyahuycer' );
define( 'LOGGED_IN_KEY',    '1x8zclsfaemwokflenpmkkghaezvczp41ncolpk8jmqqs5hqihoyf7apefw5tmmd' );
define( 'NONCE_KEY',        'fzj1g3qirpcpvo5x676x79bk2ucpooxdleggo1qwihjczttds8aptssftwlnqcfo' );
define( 'AUTH_SALT',        'xpmg4jkjdv9igzdg8hwsoilzs3jv7ksbiq6zs3sdrfvt1nd0b9pb25i1m2w4ome1' );
define( 'SECURE_AUTH_SALT', 'q2ramhlq8nzepggkldyktluck8vaagn5fvwhqx26vlvaq5uukaiice9abeilnztr' );
define( 'LOGGED_IN_SALT',   'xaw77uckdxmmwgnzwkhwogvzlr25vcviiupwdewaxexwcjdolsoti0v5n8xtgapg' );
define( 'NONCE_SALT',       '7bwlqerta8vziczfgqjminwpddaoekbwb0ofrnuvwfhfpgdewuganvdovheiz1z9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp9p_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
