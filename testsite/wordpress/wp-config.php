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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '&{hoWT:|u:[QM8.b~fiw]WFg6KZa~P2OlMx%@Xr;,.~p0$v1kR*oZm<Zy)$kcakL' );
define( 'SECURE_AUTH_KEY',  '%><Z<vaRbah+Eg idP5+MCZ31v.)QY.X1]5FER>C?{%46!pL6$ZK*c==pu{:brE?' );
define( 'LOGGED_IN_KEY',    '{g5(%Ehox~c3^Cr*dJ8@,G*!@BXhp8>bENoI%1AEG-Vte^HYR >s{aJ+fo,*E|U%' );
define( 'NONCE_KEY',        'E*;Rd.W{aVIDYP:V=w(*]6-:{])PJ.PVt[;xk&eu!+pye7A,y~*)$5!hzIe^|~%H' );
define( 'AUTH_SALT',        '[%rt$IAJq2+[i+SnWU=BD9VFe`>pQtC]ok4oyu/2xq`2C&e]2z=`yeXniG&,P3dv' );
define( 'SECURE_AUTH_SALT', 'PXf*wGFgs,]e20Rw%HZIsz_LeOW|wcG7)qBZ$;~2$3?$.C$EL/c5^E2Xs;uc1/)]' );
define( 'LOGGED_IN_SALT',   '*r03-qiXV!?u4<`(vK(Z~/8Yp$[u.Z4c`i2H/7`<8{ x$V$n~qlmli$4`vBmY9g4' );
define( 'NONCE_SALT',       'oS^UV&{QNylE<V^SEhn8-no@W<2+0tG01T9 ]<?kSF^_kClbo@g&#MxiRO,m4e&J' );

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
