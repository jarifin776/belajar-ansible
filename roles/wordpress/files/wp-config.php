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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'worduser' );

/** Database password */
define( 'DB_PASSWORD', 'asdf' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '`$MAMjFlVmX#^8$^lh|[WN.oFl9FG6N2YceuoeCs4U7VL~5o3Wob+WS]5XFJ;x<z' );
define( 'SECURE_AUTH_KEY',  '?N{JgG-:clsgSPo0LoYn0VOoo(ns/b.^o*y+c6~Al*z_M~YExce.f{x|t<n=k;!7' );
define( 'LOGGED_IN_KEY',    'Q1EjYCi;4.eWk3bk<zCOo:dy6qYFe=xzqRw{zf%2p2IUW8I4&yyW%y( ;co)Mxip' );
define( 'NONCE_KEY',        'kK`$uV&wn82e@Q.A;8XFwi>gGmcc/r{C5CqNSP~99v)P~d7za:f^@BI{6-keR6Xi' );
define( 'AUTH_SALT',        'hUF|i&??qJojPF+nmUQqf,Q-d^@KY!. C d.`>W{#1R*wOpsFWRkHf%z[pgcK~]p' );
define( 'SECURE_AUTH_SALT', '@JX$QNoSy<#e__$5:KvRnJkyYvw56%zMw#^d5_fX!$a=(<74j%0X@}!>=n$^pFOB' );
define( 'LOGGED_IN_SALT',   '|ch#Rs[~Zf!-C;Bz4wfKKW%LpC;<f8tkw~`.0j`brvhu+rw(UWy n^K<zGKy0,tt' );
define( 'NONCE_SALT',       'SVJ3-BCo0#n/k-&Ja1+/SRvhqW;Z&4-AApd);;!bN7ql4@1|Son: o[S%64b: 1?' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

