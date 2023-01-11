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
define( 'AUTH_KEY',         'qwI{ieD}oux`KVWa#tS*B^Xoq9@POT:}ZiRk[c0Gt+[}U>!%8VANhFoT!iJxMLrM' );
define( 'SECURE_AUTH_KEY',  '&O.JLmKhmGXu]D~*E+W?H4c77-tC]^N%$G(8sO<C]aqqHvws v2A[vC|(|Qkr<H(' );
define( 'LOGGED_IN_KEY',    'QCpZL.!PjZTZr-H6EsU1UJ^y qme32vFw7Ae75/-#GMr:{ui=;-1|BZN:C#yp&|M' );
define( 'NONCE_KEY',        ')]#d4{7L<UOE]w/c 06!iWbh|.<>lc S}zU@=/Z7cOA;a&Ryqv`]eI0@J:u2hq.1' );
define( 'AUTH_SALT',        'Z)iiV)!qkdM&=?shugV+tM_hxoW[Ca9|=v#$h%-]!ti@fiAvfp{`Y[L3|4g)YGl%' );
define( 'SECURE_AUTH_SALT', 'h4#naK?Vu7ts*d{7hD_s>z9ZFC9@6eG_~xf>1uD.kC,TNsJC-X]c<=!!ipbMN{+[' );
define( 'LOGGED_IN_SALT',   'Lc;&gonBUdS~j6K %kXe!*T($d[:D;Sa)$uI-{SZ<_ Tb3&IVQUbC)Q~}5K1lK|A' );
define( 'NONCE_SALT',       'ppng5i?zgO2$X2G1-aayP,,[p.~nOQ-!a>*T_U{LQYmr_Iq1sPj}MHA[@3:jm+uZ' );

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
