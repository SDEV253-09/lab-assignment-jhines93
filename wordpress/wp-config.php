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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'Jrs /9qX?VG|NW4x-Z{!rU..)qG3TD#H^:f$@;&Tf{9fbS7MOzrAm|2GW6Z,cdNa' );
define( 'SECURE_AUTH_KEY',  'Y|(sK[|C7Fk8/zdNhB=_PZg.]+.s3J7Urr1#R]Ey-z9b=fwz_? s9j)MvZ*gPurb' );
define( 'LOGGED_IN_KEY',    '..svs]S6IN-+*!=>V01,2/90%u@&/pr]ZWi6@m&2r#=jQ9ep4,B9Z$[z(9epY}-)' );
define( 'NONCE_KEY',        '/&4/*8=e{o+o5 n9UT*BnckG>cqOv6vq)}#T_Vq}y[x!Dq$s47?#7(7L3P_?X$&x' );
define( 'AUTH_SALT',        'E`}lZTFi9wC%FgT}};,P6J^QDrv,<6>~#an3yrGh&32(9@ZJumd}zY).Q,91A#pu' );
define( 'SECURE_AUTH_SALT', 'WY2ocq!L/{U`HJM6j:-)~t[&,@;OE:a) 8<lG{At&9-^[hnllQo{;=lqO3!flu!:' );
define( 'LOGGED_IN_SALT',   '((`?]/Xbx,NBs!>}~3@[3 kDSF 3?P[7kRCM!QaQPC7_^g4pq$GoqmzwFY+ ,grO' );
define( 'NONCE_SALT',       'AY]<5@EmWsqAQBrn<jEnZ]uhYNhF6zx]/!cdqw>$x3Hb!?y#!LCP9l%D]:7 m2,:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
