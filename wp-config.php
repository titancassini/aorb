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
define( 'DB_NAME', 'a_or_b' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'E`y|`l[]Yz7!,<[T>xqOb(K68eD#:@[g5QO?BB/9_pH,`m&TUZ>F{d<w)}~kuGOT' );
define( 'SECURE_AUTH_KEY',  'LQ.h]0KN6]>rGdP%eu8i2W6@kH!%vU</?l&J;`]pHf_Kp`xQ,:e>%M8*Y87+{dTJ' );
define( 'LOGGED_IN_KEY',    '6CWBI3J|>9f/Q(Fv?0*,<9U{^AjX,hUc*j)*rXz9)X8]%s6u{U5v;n`a_y~{Jj_q' );
define( 'NONCE_KEY',        '$i@4UI>LZljdOsd.c-3t+xYRY6&l&7ZSjrokerALZymPxmaFEY#%9$w.^gOl:2`B' );
define( 'AUTH_SALT',        ' M~>oT9Av&gPnRmFrLu7zDp4fKlSDPR:2ok#fisJF0L5lBhUe5ZxOhqwy&0k*EKn' );
define( 'SECURE_AUTH_SALT', 'j}?2x./2C7<vrr_x$m82WF]:Du= BU~oY}&A^bX4/wT-zbxI7*6(z*Fnadjra,8G' );
define( 'LOGGED_IN_SALT',   'ec=-AphqGJ4L^ofb:YoIAav6r^5Dnxk4fUg)0GLtu>iJ:EC@_[*csV_vyF,FOjYk' );
define( 'NONCE_SALT',       '|>A`*A-x_K&v@rrJc=FR:0=Z8GA$hE`9n;J!!yQCPF{u/+}iADDX6+7EIg4vT02m' );

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

