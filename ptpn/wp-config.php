<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ptpn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'TOB5bF4Jfrb2WTzxvYhEqYecXIQt3C6veUf7Poj17kfbtv3X3D4KLk9teFtNJQa5' );
define( 'SECURE_AUTH_KEY',  'I9iQgiSN7SPHZp7KOkySlmZicy8isx468szayAfo7shPUjoYw3i3GDLoBwRZtxc3' );
define( 'LOGGED_IN_KEY',    'fbzUmthLqLypkJiJBDjpN1SQN2AklqmqTaQ5jngA527KauZMDW4AtkwLw34hmZnJ' );
define( 'NONCE_KEY',        'mqo4geIZ47anFdsAxDR9li6fcIVPlGYkiythWXMc2Wag2Ib3yOoXphjwfWbik4wf' );
define( 'AUTH_SALT',        'xTQBJYOnvL9Bb0yFNteqSjkLh5M2KPiTKr221uQU41Vb3WbmlyLumAxljxobCHO8' );
define( 'SECURE_AUTH_SALT', 'ZOmMNyvFqlDcD3Ll8YA4IaRYSDGpeOCZTHqqEsEI7ingO45MAXZhv9WlB3aa7QAE' );
define( 'LOGGED_IN_SALT',   '4vmiqqdWmnB7J7pT1crHmDAsDNoOlDCQUbGCMi8PcmJbvHAsDuw7YAq5xKIbCJH8' );
define( 'NONCE_SALT',       'CB2NMEpUpEaoZhUFUokP3JWbaLJMU7G0926gUc8rzn4AnDZaSNbO3L9bzT9PdT45' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
