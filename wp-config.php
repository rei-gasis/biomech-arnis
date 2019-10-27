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
define( 'DB_NAME', 'arnisdb' );

/** MySQL database username */
define( 'DB_USER', 'arnis_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'arnisarnis' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ls7A<jy0lkOj*EtoXXyR{eI_~vFsdm5+Bg>&J[~L2^*|rRw$n*F5^4}5Lm+zuwL2' );
define( 'SECURE_AUTH_KEY',  'pJ&0c}QsEYvUoRi5nqy(=CAZ~ Z?)xKv~%,0=*.Zwb;Ww&$^D|@4wp5GsXu(vYHQ' );
define( 'LOGGED_IN_KEY',    '0,1r_5*d (71i:!8BB.|}SDZf>[m5MF@` ~fe`{dyP5$W6Ettbi^J$/E!]OwpBN:' );
define( 'NONCE_KEY',        'a1cvOa__0%#nCHkqFIO)]Q#!Q75LV=i96nKt/ZuF`qUjTXG)[sebjcbEpPZ-WSNA' );
define( 'AUTH_SALT',        '1S_{%x3KSE^`A&15J@F}J4![7.|_kH#rdG%7Qu~!KOV3C%Epm1%fyO~FSk)LkD+X' );
define( 'SECURE_AUTH_SALT', 'hsq:qC%PA)l m614Cc-~ET5Y)g=h9ML+Husf%5^(0 *R,l^ZAI0sj} @%B=M?v)B' );
define( 'LOGGED_IN_SALT',   'X;vc>W2 Hwv:nHw%PQPT~5RhHAJ7R|bW(%G:R6~lurn}y:XRkEUsHi@z6VbB;-w#' );
define( 'NONCE_SALT',       'yvvOqB7~Y&B4EqZ)*laV_>%ki$6G@LA8|IpTq>}D*]8~/M#n@HhY5,`oGq)j*O0`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bma_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );




@ini_set( 'upload_max_size' , '8M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '128M' );
