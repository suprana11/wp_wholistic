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
define( 'DB_NAME', 'wholistic' );

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
define( 'AUTH_KEY',         'a6/HXV?zdl}ZdC8q?yn8@!<[@CC#GszdJ+XYpHB#v!(B80O`9r8ylG)w4vq)ZaW:' );
define( 'SECURE_AUTH_KEY',  'X,aUa~ ><tsjJ(fc)lqYX-9BPT{*}xmtVj)y7O7p[$r%di[rN9%o`9^&G~tGm=Ur' );
define( 'LOGGED_IN_KEY',    'tS}jO|fR@l-9(I>*cLreZ8nhtkIs(FjlWx&`.sVJ|dM?:dv>^W+mb IXO!2J8)vp' );
define( 'NONCE_KEY',        '[b@):#8^0sHAb1ZF8.c8zZy6MopVq7}+9[ 0~YuO(u!UzTG^;}T%ZGmW?0_EG]qM' );
define( 'AUTH_SALT',        'ZU.KsRZ<dKSsgV^60QKNq_bBdSEV2/0~, VfGqFupROZ_xKwr/OQ{Kq$Wp[xxP}Q' );
define( 'SECURE_AUTH_SALT', '.3viC!>][NewiiL>96YSYkYP F8%#{nn0Kk~@FpdzTP=zrAcg>!J$vk8o#xBFWt1' );
define( 'LOGGED_IN_SALT',   'f-SwUX5+n>o}/gzNOH,ho9WL`l%pg&]ZT,lMUKr<R0.:I]B5dY0~11sqS&>f1~ap' );
define( 'NONCE_SALT',       'mYXo]g5nb {O-w[4}C;_:agPk4q7f5dg=Qz4fj$Acgm;^Np[zKr4B90(eed]s~[&' );

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
