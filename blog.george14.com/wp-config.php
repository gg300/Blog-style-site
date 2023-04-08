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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'george14_wp43' );

/** Database username */
define( 'DB_USER', 'george14_wp43' );

/** Database password */
define( 'DB_PASSWORD', 'p4]S4B)19R' );

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
define( 'AUTH_KEY',         'e0wou31x5zu8vfeeon1mzncatpqz91lel1fzsfawcsvanxbbpoiiwjflqmhfkwrw' );
define( 'SECURE_AUTH_KEY',  'tdw4sgk7kyktb4yypp3pw5wcj9amrytxzbhy2yjj88nuks7nlsutkcqfoxypiv46' );
define( 'LOGGED_IN_KEY',    'ib4lh12wcdgpmhexwwg2o9rf2fizkvehggu49iutt3dpmlpvsy0pi6tddeblhp7m' );
define( 'NONCE_KEY',        'zxeahoplggv9osspj3qe3lip1zin2tyczkkvfwahv6q5rij8ebyzy3aa6jgge5za' );
define( 'AUTH_SALT',        'b5tzcks7jl8gclfs0k8fnfacxpiz6edrheffmseqfwvnkd3ra0yf4esao43kexei' );
define( 'SECURE_AUTH_SALT', 'henx1kdf6kk4uym97r4omw0xubimsjqhbmuqygm2yz7s6dm62vxwesoihpiioaxi' );
define( 'LOGGED_IN_SALT',   '61qpvurtmw3rafw3okr4xnjfjtxcw5ntvaxunlof0lczeooxshjm0vl3vzxamt5e' );
define( 'NONCE_SALT',       'eoh41n81xndhxscacsv57g8fgyl3ycqe3rv42u1s0nydjls5fnaqfguduqchzhic' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp59_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
