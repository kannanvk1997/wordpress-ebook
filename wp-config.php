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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         ')MmN~`v>zd&.n:.gZJ5j$ZVQA!ob zp+UR[a|.@clMmlnnBK(C{[NAlw4Yd64HH0' );
define( 'SECURE_AUTH_KEY',  '~FmsTO8oGKYGO6XXAk]y_s^auWJ|uQHg5H ksErKuQ=fkh j`SBm?TVUM_-kxx1n' );
define( 'LOGGED_IN_KEY',    'OmmxvkXQ5,^(1>}jFl]C&St_$YrmmO^pu-$773DP 4nxYrwfIT&NjC+yK]l*Tr-O' );
define( 'NONCE_KEY',        '.C&)1I^xZNL9ZsVpTunMZnBm)IYzeDP39gDWV`mU*!.s]G7`^$=gx!5;;&_pX3Zc' );
define( 'AUTH_SALT',        'q34LjXsD}H02<2fjr}l6K6*W5qVF2}SO.KQje0;>_wH$MjEmW1M#D/.BZOXIu#Nu' );
define( 'SECURE_AUTH_SALT', ',4v aa=MY#3v*Sl%O%53T[j9alvxMW^C>A!aS/S, Z^*t(d4!IJ73G|=wd-r=K}<' );
define( 'LOGGED_IN_SALT',   'hFLnMZLBN9JJT{eGwMuT*FVQ)g8q^,zbKx?c.qZIE$|MYP!pl<inbk6 49<D`R(z' );
define( 'NONCE_SALT',       'cchm2?DXt`k SvTPVBWSKx4kSQ8zXXcvnHIetBwPU=.B<LV{bzDq>,+3jTDxg8cT' );

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
