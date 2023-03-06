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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=QzNY64]o6j4w>1.zdUJOmLJk8DlP1i~oIax+iE{}_E,i?z$DlpOA=On^&@[@i1b' );
define( 'SECURE_AUTH_KEY',  '(hwNnB|O7^H+Ot$]U_t[4D#-?sEzJTo_nf+)BhX|,9/~p!l9#r}@U^ybXZU/DzfF' );
define( 'LOGGED_IN_KEY',    '-^w_=v@vR-tpG[%xb_r4ej~/, C16L|KF)Wb%F*Y^P}t -bmw[<h8|l~~ 1024jV' );
define( 'NONCE_KEY',        '#09[S<h1<ll?:9Sr>yI_v/EEhnFV=tR}V7{8Tdv#l@z}51K$@0--))9l&1XB%`:T' );
define( 'AUTH_SALT',        'gj/i4fuL+w$LhrAOau1ZHltkyP}U?1AZ)I3bxND mhOZ)2;*B/zhl^:UYXz=)qj/' );
define( 'SECURE_AUTH_SALT', '~Rg?q+$t`M-guFr$;T! I%L~Elc%Q~@@J0,_TiUJh;x!8lUYxfp4;g}wYDZpCuT[' );
define( 'LOGGED_IN_SALT',   '-,9v~9oD5!Q,(N<tQ$]S`sI`%c>GFl8#afg/nnM46D{!<0.AjCM:G>Yhv:msd6=2' );
define( 'NONCE_SALT',       'Gmd/N0l}qt}MbGmAw%:EYB~g}B>okSzVs#AZU#EKO3+^s:!z9%gnY3Qms0B)BN}O' );

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
