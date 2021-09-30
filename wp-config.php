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
define( 'DB_NAME', 'wpress' );

/** MySQL database username */
define( 'DB_USER', 'deshwar' );

/** MySQL database password */
define( 'DB_PASSWORD', '1982' );

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
define( 'AUTH_KEY',         '_Z5TZgw1mD;Y5x% r_{Hi04K)3i)iD[2$T7ydE7(X]5&Y?u#|zIdtrIEq!g2K_gD' );
define( 'SECURE_AUTH_KEY',  'M!;=7LCk^JPu,thu^^n!rj;H@ukYaN^$/ezYW jKGq@/E CK2$UDmN7K0nFvOu4x' );
define( 'LOGGED_IN_KEY',    '+Dq8 w1P?9^f|R8W ]@>C|qM_rU$)sx B!}oP4MtxPfPjU!0I8EhrD{TJ P59SjK' );
define( 'NONCE_KEY',        'erwja?3Myt$X]?=VAo5Siu4PE4s I[D3D{NQpYjU@-b4Zj?!:0]mxBDeyQe:ZJas' );
define( 'AUTH_SALT',        'mM+u93}Ryog#p4g3GIEyA@(<NW*I3*0N%,fyGcd`V=3qU,{(3LvbfT^~K@x#CNNa' );
define( 'SECURE_AUTH_SALT', 'yeD)7XHR#:7T]mD[~1a(4z/Y em%DkBaa})WK,@Nzj>Ug~%X@L(IyvDB4=E2t.i`' );
define( 'LOGGED_IN_SALT',   'VO!CaV0oz<?PQv*6(:loU.*zls>qse0Vc}v);%r~ul+,c(vL9papdp8IbjVi5vaI' );
define( 'NONCE_SALT',       'Z<>ErY4`xZ9vjD<`$J&@_#o$NjFUM!J;rC|e>fFe.%v)|ix&kP @[p^R +q-EWG|' );

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
