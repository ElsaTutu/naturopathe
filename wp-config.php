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
define( 'DB_NAME', 'naturopathe' );

/** MySQL database username */
define( 'DB_USER', 'naturopathe' );

/** MySQL database password */
define( 'DB_PASSWORD', 'naturopathe' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'XtL1@>O3_HBU+%Mgs~ 4j<v% NgbooDW4ItuhtTht)U=.eJjYj!5+AVqRj$mo3[Z' );
define( 'SECURE_AUTH_KEY',  'O cZf`4*1%1qvWY0y[)kI^&0i338qT4/CN{6{</3as%AtXOR`y%#d[pMmx{[e&-g' );
define( 'LOGGED_IN_KEY',    '+.IP@I~&CkMCJ; {Ck8RKq&Ate/gz041-|t9Ffi?ftrtKvAt!C|CcT1-=48>ZJ7f' );
define( 'NONCE_KEY',        'LE.er#=JxJq{ NZ~Y<8;t%yuCILm<%Oe1u:@{QQ5yOHQp8~bo6A6#Mgq*CF(1?>`' );
define( 'AUTH_SALT',        'oU@rmM {Kl/jT>q_His#SMF+taFb;)<LccIqfCLLp~:b7,]i_strv.R8~<Fv)+uZ' );
define( 'SECURE_AUTH_SALT', 'skTprek3qsI`heCI}6~|mupaG@9r&,Q9jDApnS7H-?keF_l{9<7RZxev&RvFp&_h' );
define( 'LOGGED_IN_SALT',   'cm~*6sbA}/k~0V4ckI^C%ReI/erF9rmMV5^1+I)^|#=}LwC0dx7;rDrG{GKD{]()' );
define( 'NONCE_SALT',       '.FN3{}&u/{Q`%+s^GKLN,JBK6*M$JTiC2Pe!u1So*1XLiWfm^R|# W}~#et#o`Tm' );

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

/**Plugins right*/
define( 'FS_METHOD', 'direct' );
